<?php

namespace App\Livewire\Admin\Filament\Batch;

use App\Models\Batch;
use App\Models\Course;
use Filament\Actions\Action;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Contracts\HasActions;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Components\Grid;
use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Columns\ToggleColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Filters\TrashedFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Component;

class BatchIndex extends Component implements HasForms, HasTable, HasActions
{
    use InteractsWithActions;
    use InteractsWithTable;
    use InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(Batch::query()->with('course')->withTrashed())
            ->columns([
                SpatieMediaLibraryImageColumn::make('featured_image')
                    ->collection('batch_featured_image')
                    ->label('Image')
                    ->circular()
                    ->toggleable(),
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('course.title')
                    ->label('Course')
                    ->searchable()
                    ->sortable()
                    ->badge()
                    ->color('info'),
                TextColumn::make('limit')
                    ->sortable(),
                TextColumn::make('time')
                    ->sortable(),
                ToggleColumn::make('is_sale_skip')
                    ->label('Sale Skip'),
                TextColumn::make('description')
                    ->toggleable(isToggledHiddenByDefault: true),
                TextColumn::make('created_at')
                    ->date('d-M-Y')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->defaultSort('created_at', 'desc')
            ->filters([
                TrashedFilter::make(),
                SelectFilter::make('course_id')
                    ->label('Course')
                    ->options(fn (): array => Course::query()->pluck('title', 'id')->toArray()),
                Filter::make('created_at')
                    ->schema([
                        DatePicker::make('created_from'),
                        DatePicker::make('created_until'),
                    ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when($data['created_from'], fn (Builder $q, string $v): Builder => $q->whereDate('created_at', '>=', $v))
                            ->when($data['created_until'], fn (Builder $q, string $v): Builder => $q->whereDate('created_at', '<=', $v));
                    }),
            ])
            ->filtersFormColumns(3)
            ->recordActions([
                Action::make('view')
                    ->url(fn (Batch $record): string => route('admin.batches.show', $record))
                    ->icon('heroicon-o-eye')
                    ->color('info'),
                Action::make('edit')
                    ->icon('heroicon-o-pencil')
                    ->color('success')
                    ->mountUsing(fn (Batch $record, \Filament\Schemas\Schema $schema) => $schema->fill([
                        'title'       => $record->title,
                        'course_id'   => $record->course_id,
                        'limit'       => $record->limit,
                        'time'        => $record->time,
                        'description' => $record->description,
                    ]))
                    ->schema([
                        Grid::make(2)->schema([
                            TextInput::make('title')
                                ->required()
                                ->maxLength(255)
                                ->columnSpanFull(),
                            Select::make('course_id')
                                ->label('Course')
                                ->options(Course::query()->pluck('title', 'id'))
                                ->searchable()
                                ->required(),
                            TextInput::make('limit')
                                ->numeric()
                                ->label('Student Limit'),
                            TimePicker::make('time')
                                ->label('Class Time')
                                ->seconds(false),
                            Textarea::make('description')
                                ->rows(3)
                                ->columnSpanFull(),
                            SpatieMediaLibraryFileUpload::make('featured_image')
                                ->collection('batch_featured_image')
                                ->label('Featured Image')
                                ->image()
                                ->maxSize(2048),
                            SpatieMediaLibraryFileUpload::make('batch_content')
                                ->collection('batch_batch_content')
                                ->label('Batch Content')
                                ->multiple()
                                ->maxSize(2048),
                        ]),
                    ])
                    ->action(function (Batch $record, array $data): void {
                        $record->title       = $data['title'];
                        $record->course_id   = $data['course_id'];
                        $record->limit       = $data['limit'] ?? null;
                        $record->time        = $data['time'] ?? null;
                        $record->description = $data['description'] ?? null;
                        $record->save();

                        Notification::make()
                            ->title('Batch updated successfully')
                            ->success()
                            ->send();
                    })
                    ->modalWidth('2xl'),
            ]);
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.admin.filament.batch.batch-index');
    }
}
