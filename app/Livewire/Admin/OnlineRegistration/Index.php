<?php

namespace App\Livewire\Admin\OnlineRegistration;

use Filament\Actions\Action;
use Filament\Actions\BulkAction;
use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
use App\Models\Campus;
use App\Models\Course;
use App\Models\OnlineRegistration;
use Filament\Actions\DeleteAction;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Schemas\Schema;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Concerns\InteractsWithTable;
use Filament\Tables\Contracts\HasTable;
use Filament\Tables\Enums\FiltersLayout;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Support\Collection;
use Livewire\Component;

class Index extends Component implements HasTable, HasForms, HasActions
{
    use InteractsWithActions;
    use InteractsWithTable, InteractsWithForms;

    public function table(Table $table): Table
    {
        return $table
            ->query(OnlineRegistration::query()->with('courses')->latest())
            ->columns([
                TextColumn::make('name')->searchable()->toggleable(),
                TextColumn::make('father_name')->label('Father Name')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('pakistan_mobile')->label('Mobile Number')->toggleable(),
                TextColumn::make('whatsapp_mobile')->label('Whatsapp Number')->toggleable(),
                TextColumn::make('status')->label('Status')->toggleable()
                    ->view('admin.filament.tables.columns.registration-status')
                    ->action(
                        Action::make('viewStatusHistory')
                            ->label('Status History')
                            ->modalContent(fn(OnlineRegistration $record) => view(
                                'admin.filament.modals.registration-status-history',
                                ['record' => $record]
                            ))
                            ->modalSubmitAction(false)
                            ->modalCancelActionLabel('Close')
                    ),
                TextColumn::make('email')->label('Email')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('pak_cnic')->label('CNIC')->searchable()->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('passport_number')->label('Passport Number')->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('address')->label('Address')->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('courses')->view('admin.filament.tables.columns.courses')->toggleable(),
                TextColumn::make('campus.name')->label('Campus')->toggleable(),
                TextColumn::make('ace_reference')->label('Reference')->toggleable()->toggledHiddenByDefault(),
                TextColumn::make('mode_of_learning')->label('Learning Type')->toggleable(),

                TextColumn::make('created_at')->since()->toggleable()->toggledHiddenByDefault(),
            ])->filters([
                SelectFilter::make('campus_id')
                    ->label('Campus')
                    ->options(Campus::all()->pluck('name', 'id')),
                SelectFilter::make('course')
                    ->label('Course')
                    ->relationship('courses', 'title')
                    ->options(Course::all()->pluck('title', 'id')),
                SelectFilter::make('mode_of_learning')
                    ->label('Mode')
                    ->options([
                        'In Campus' => 'On-Campus',
                        'Online' => 'Online'
                    ])
            ], layout: FiltersLayout::AboveContent)
            ->recordActions([
                Action::make('updateStatus')
                    ->label('Update Status')
                    ->mountUsing(fn(Schema $schema, OnlineRegistration $record) => $schema->fill([
                        'status' => $record->latestStatus()['status'] ?? null,
                        'date' => now()->toDateTimeString(),
                        'message' => null,
                    ]))
                    ->schema([
                        Select::make('status')
                            ->label('Status')
                            ->options(OnlineRegistration::STATUS)
                            ->required(),
                        DateTimePicker::make('date')
                            ->label('Date & Time')
                            ->required(),
                        Textarea::make('message')
                            ->label('Message/Reason/Notes'),
                    ])
                    ->action(function (OnlineRegistration $record, array $data): void {
                        $existing = empty($record->status) ? [] : (isset($record->status[0]) ? $record->status : [$record->status]);
                        $record->status = array_merge($existing, [[
                            'status' => $data['status'],
                            'date' => $data['date'],
                            'message' => $data['message'] ?? null,
                            'updated_by' => auth()->id(),
                        ]]);
                        $record->save();

                        Notification::make()
                            ->title('Status updated successfully')
                            ->success()
                            ->send();
                    }),
                DeleteAction::make('delete')
                    ->visible(fn($record) => auth()->user()->is_admin)
            ])
            ->toolbarActions([
                BulkAction::make('delete')
                    ->requiresConfirmation()
                    ->visible(fn($record) => auth()->user()->is_admin)
                    ->action(fn (Collection $records) => $records->each->delete())
            ]);
    }

    public function render(): \Illuminate\View\View
    {
        return view('livewire.admin.online-registration.index');
    }
}
