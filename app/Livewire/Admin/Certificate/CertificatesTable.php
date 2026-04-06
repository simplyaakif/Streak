<?php

namespace App\Livewire\Admin\Certificate;

use App\Models\Admin\Certificate;
use App\Models\Batch;
use App\Models\BatchStudent;
use App\Models\Course;
use App\Models\User;
use Carbon\Carbon;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TernaryFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class CertificatesTable extends Component implements HasActions, HasSchemas, HasTable
{
    use InteractsWithActions;
    use InteractsWithSchemas;
    use InteractsWithTable;

    public function table(Table $table): Table
    {
        return $table
            ->query(
                BatchStudent::query()
                    ->where('batch_status', 2)
                    ->with(['student', 'batch', 'batch.course', 'certificate', 'certificate.deliveredBy'])
            )
            ->columns([
                SpatieMediaLibraryImageColumn::make('student.dp')
                    ->label('Photo')
                    ->collection('student_dp')
//                    ->state(fn (BatchStudent $record): string => $record->student->dp->first()['thumbnail'] ?? $record->student->avatar_url)
                    ->circular(),
                TextColumn::make('student.name')
                    ->label('Student')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('batch.title')
                    ->label('Batch')
                    ->searchable()
                    ->sortable()->toggleable(),
                TextColumn::make('batch.course.title')
                    ->label('Course')->toggledHiddenByDefault()->toggleable(),
                BadgeColumn::make('batch_status')
                    ->label('Status')
                    ->formatStateUsing(fn (int $state): string => BatchStudent::STATUS[$state] ?? $state)
                    ->color('success'),
                TextColumn::make('certificate_status')
                    ->label('Certificate Status')
                    ->state(fn (BatchStudent $record): string => $record->certificate ? 'Published' : 'Pending')
                    ->badge()
                    ->color(fn (string $state): string => $state === 'Published' ? 'success' : 'gray'),
                TextColumn::make('certificate.delivered_at')
                    ->label('Date Delivered')
                    ->date('d M Y')
                    ->placeholder('Not Delivered')
                    ->sortable()
                    ->badge()
                    ->color(fn (?string $state): string => $state ? 'success' : 'gray'),
                TextColumn::make('certificate.deliveredBy.name')
                    ->label('Delivered By')
                    ->placeholder('—')
                    ->searchable(),
            ])
            ->filters([
                SelectFilter::make('batch_id')
                    ->label('Batch')
                    ->options(fn (): array => Batch::orderBy('title')->pluck('title', 'id')->toArray())
                    ->searchable()
                    ->preload(),

                SelectFilter::make('course')
                    ->label('Course')
                    ->options(fn (): array => Course::orderBy('title')->pluck('title', 'id')->toArray())
                    ->searchable()
                    ->preload()
                    ->query(fn (Builder $query, array $data): Builder => filled($data['value'])
                        ? $query->whereHas('batch', fn (Builder $q) => $q->where('course_id', $data['value']))
                        : $query
                    ),

                Filter::make('delivered_at_range')
                    ->label('Date Delivered')
                    ->form([
                        DatePicker::make('from')
                            ->label('From'),
                        DatePicker::make('until')
                            ->label('Until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['from'], fn (Builder $q) => $q->whereHas('certificate', fn (Builder $q) => $q->whereDate('delivered_at', '>=', $data['from'])))
                            ->when($data['until'], fn (Builder $q) => $q->whereHas('certificate', fn (Builder $q) => $q->whereDate('delivered_at', '<=', $data['until'])));
                    })
                    ->indicateUsing(function (array $data): array {
                        $indicators = [];
                        if ($data['from'] ?? null) {
                            $indicators[] = 'Delivered from ' . Carbon::parse($data['from'])->format('d M Y');
                        }
                        if ($data['until'] ?? null) {
                            $indicators[] = 'Delivered until ' . Carbon::parse($data['until'])->format('d M Y');
                        }
                        return $indicators;
                    }),

                TernaryFilter::make('certificate_status')
                    ->label('Certificate Status')
                    ->trueLabel('Published')
                    ->falseLabel('Pending')
                    ->default(false)
                    ->queries(
                        true: fn (Builder $query): Builder => $query->whereHas('certificate'),
                        false: fn (Builder $query): Builder => $query->whereDoesntHave('certificate'),
                    ),
            ], layout: FiltersLayout::AboveContent)
            ->recordActions([
                Action::make('generateCertificate')
                    ->label('Generate Certificate')
                    ->icon('heroicon-o-document-plus')
                    ->color('primary')
                    ->visible(fn (BatchStudent $record): bool => $record->certificate === null)
                    ->form([
                        Select::make('grade')
                            ->label('Grade')
                            ->options([
                                'A'  => 'A',
                                'A-' => 'A-',
                                'B+' => 'B+',
                                'B'  => 'B',
                                'B-' => 'B-',
                                'C+' => 'C+',
                                'C'  => 'C',
                                'C-' => 'C-',
                            ])
                            ->required(),
                    ])
                    ->action(function (BatchStudent $record, array $data): void {
                        $parta = Carbon::parse($record->session_start_date)->format('ymd');
                        $partb = str_pad($record->id, 3, '0', STR_PAD_LEFT);

                        Certificate::create([
                            'batch_student_id'    => $record->id,
                            'student_id'          => $record->student_id,
                            'batch_id'            => $record->batch_id,
                            'published_at'        => now()->toDateString(),
                            'registration_number' => $parta . '-' . $partb,
                            'grade'               => $data['grade'],
                        ]);

                        Notification::make()
                            ->title('Certificate generated successfully.')
                            ->success()
                            ->send();
                    }),

                Action::make('markDelivered')
                    ->label('Mark as Delivered')
                    ->icon('heroicon-o-truck')
                    ->color('success')
                    ->visible(fn (BatchStudent $record): bool => $record->certificate !== null && $record->certificate->delivered_at === null)
                    ->form([
                        DatePicker::make('delivered_at')
                            ->label('Delivery Date')
                            ->default(now()->toDateString())
                            ->required(),
                        Select::make('delivered_by')
                            ->label('Delivered By')
                            ->options(fn (): array => User::orderBy('name')->pluck('name', 'id')->toArray())
                            ->searchable()
                            ->required(),
                    ])
                    ->action(function (BatchStudent $record, array $data): void {
                        $record->certificate->update([
                            'delivered_at' => $data['delivered_at'],
                            'delivered_by' => $data['delivered_by'],
                        ]);

                        Notification::make()
                            ->title('Certificate marked as delivered.')
                            ->success()
                            ->send();
                    }),

                Action::make('editDeliveryDate')
                    ->label('Edit Delivery Date')
                    ->icon('heroicon-o-calendar')
                    ->color('warning')
                    ->visible(fn (BatchStudent $record): bool => $record->certificate?->delivered_at !== null)
                    ->fillForm(fn (BatchStudent $record): array => [
                        'delivered_at' => $record->certificate->delivered_at,
                        'delivered_by' => $record->certificate->delivered_by,
                    ])
                    ->form([
                        DatePicker::make('delivered_at')
                            ->label('Delivery Date')
                            ->required(),
                        Select::make('delivered_by')
                            ->label('Delivered By')
                            ->options(fn (): array => User::orderBy('name')->pluck('name', 'id')->toArray())
                            ->searchable()
                            ->required(),
                    ])
                    ->action(function (BatchStudent $record, array $data): void {
                        $record->certificate->update([
                            'delivered_at' => $data['delivered_at'],
                            'delivered_by' => $data['delivered_by'],
                        ]);

                        Notification::make()
                            ->title('Delivery date updated.')
                            ->success()
                            ->send();
                    }),

                Action::make('viewCertificate')
                    ->label('View Certificate')
                    ->icon('heroicon-o-document-text')
                    ->color('gray')
                    ->visible(fn (BatchStudent $record): bool => $record->certificate !== null)
                    ->url(fn (BatchStudent $record): string => route('admin.certificates.show', $record->certificate->id)),

                Action::make('viewStudent')
                    ->label('View Student')
                    ->icon('heroicon-o-user')
                    ->color('info')
                    ->url(fn (BatchStudent $record): string => route('admin.students.show', $record->student_id)),
            ]);
    }

    public function render(): \Illuminate\Contracts\View\View
    {
        return view('livewire.admin.certificate.certificates-table');
    }
}
