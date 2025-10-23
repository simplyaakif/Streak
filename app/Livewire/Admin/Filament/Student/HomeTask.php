<?php

    namespace App\Livewire\Admin\Filament\Student;

use Filament\Actions\Contracts\HasActions;
use Filament\Actions\Concerns\InteractsWithActions;
use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Contracts\HasSchemas;
use Filament\Schemas\Concerns\InteractsWithSchemas;
use Auth;
use App\Models\Batch;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Notifications\Notification;
use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;
    use App\Models\HomeTask as HT;

    class HomeTask extends Component implements HasTable, HasSchemas, HasActions {

        use InteractsWithActions;
        use InteractsWithTable, InteractsWithSchemas;

        public $showModal = false;
        public Batch $batch;
        public ?array $data = [];

        public function mount(): void
        {
            $this->form->fill();
        }
        protected function getTableColumns(): array
        {
            return [
                TextColumn::make('title')->searchable(),
                TextColumn::make('employee.name')
                ->label('Instructor'),
                TextColumn::make('due_date_time')->dateTime('h:i A D d-M-Y'),
                TextColumn::make('created_at')->dateTime('D d-M-Y')->sortable(),
            ];
        }

        protected function getTableActions(): array
        {
            return [
                Action::make('view')
                    ->mountUsing(fn (Schema $schema, HT $record) => $schema->fill([
                        'title' => $record->title,
                        'homework' => $record->homework,
                        'due_date_time' => $record->due_date_time,
                    ]))
                    ->action(function (HT $record, array $data): void {
                        $record->title = $data['title'];
                        $record->homework = $data['homework'];
                        $record->due_date_time = $data['due_date_time'];
                        $record->save();
                    })
                    ->modalCancelActionLabel('Close')
                    ->modalSubmitAction(false)
                    ->schema([
                        Grid::make(1)
                            ->schema([
                                TextInput::make('title')->columnSpan(1),
                                DateTimePicker::make('due_date_time')
                                    ->seconds(false)
                                    ->columnSpan(1),
                                Textarea::make('homework')
                                    ->rows(10)
                                    ->columnSpan(1),
                            ])
                    ]),
               Action::make('edit')
                   ->mountUsing(fn (Schema $schema, HT $record) => $schema->fill([
                       'title' => $record->title,
                       'homework' => $record->homework,
                       'due_date_time' => $record->due_date_time,
                   ]))
                   ->action(function (HT $record, array $data): void {
                       $record->title = $data['title'];
                       $record->homework = $data['homework'];
                       $record->due_date_time = $data['due_date_time'];
                       $record->save();
                   })
                   ->visible(fn (HT $record): bool => auth()->user()->can('home_task_edit', $record) ||
                       $record->employee_id === auth()->user()->employee->id)
                   ->schema([
                       Grid::make(1)
                           ->schema([
                               TextInput::make('title')->columnSpan(1),
                               DateTimePicker::make('due_date_time')
                                   ->seconds(false)
                                   ->columnSpan(1),
                               Textarea::make('homework')
                                   ->rows(10)
                                   ->columnSpan(1),
                           ])
                   ]),
              Action::make('delete')
              ->action(fn (HT $record) => $record->delete())
              ->requiresConfirmation()
              ->visible(fn (HT $record): bool => auth()->user()->can('home_task_delete', $record))
              ->color('danger'),
            ];
        }

        protected function getDefaultTableSortColumn(): ?string
        {
            return 'created_at';
        }
        protected function getDefaultTableSortDirection(): ?string
        {
            return 'desc';
        }
        protected function getTablePaginationPageName(): string
        {
            return 'home_work';
        }

        public function form(Schema $schema): Schema
        {
            return $schema
                ->schema([
                    Grid::make(1)
                        ->schema([
                            TextInput::make('title')
                                ->required()
                                ->columnSpan(1),
                            DateTimePicker::make('due_date_time')
                                ->seconds(false)
                                ->required()
                                ->columnSpan(1),
                            Textarea::make('homework')
                                ->rows(10)
                                ->columnSpan(1),
                        ])
                ])
                ->statePath('data');
        }

        public function submit(): void
        {
            $homeWork = $this->form->getState();
            $homeWork['employee_id'] = Auth::user()->employee->id;
            $homeWork['batch_id'] = $this->batch->id;
            HT::create($homeWork);
            $this->showModal = false;
            $this->form->fill();

            Notification::make()
                ->title('HomeWork Added Successfully')
                ->success()
                ->send();
        }
        protected function getTableQuery(): Builder|Relation
        {
            return HT::query()->where('batch_id',$this->batch->id);
        }

        public function render(): \Illuminate\Contracts\View\View
        {
            return view('livewire.admin.filament.student.home-task');
        }
    }
