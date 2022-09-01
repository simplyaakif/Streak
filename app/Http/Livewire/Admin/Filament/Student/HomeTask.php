<?php

    namespace App\Http\Livewire\Admin\Filament\Student;

use App\Models\Batch;
use Filament\Forms\ComponentContainer;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Concerns\InteractsWithForms;
use Filament\Forms\Contracts\HasForms;
use Filament\Notifications\Notification;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;
    use App\Models\HomeTask as HT;

    class HomeTask extends Component implements HasForms,HasTable {

        use InteractsWithTable,InteractsWithForms;

        public $showModal = false;
        public Batch $batch;

        public function mount()
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
                    ->mountUsing(fn (ComponentContainer $form, HT $record) => $form->fill([
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
                    ->modalButton('Close')
                    ->form([
                               Grid::make(2)
                                   ->schema([
                                                TextInput::make('title')->disabled(),
                                                DateTimePicker::make('due_date_time')
                                                    ->withoutSeconds()->disabled(),
                                                Textarea::make('homework')
                                                    ->rows(10)->disabled()
                                                    ->columnSpan(2),
                                            ])
                           ]),
               Action::make('edit')
                   ->mountUsing(fn (ComponentContainer $form, HT $record) => $form->fill([
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
                   ->form([
                              Grid::make(2)
                                  ->schema([
                                               TextInput::make('title'),
                                               DateTimePicker::make('due_date_time')
                                                   ->withoutSeconds(),
                                               Textarea::make('homework')
                                                   ->rows(10)
                                                   ->columnSpan(2),
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

        protected function getFormSchema(): array
        {
            return [
                Grid::make(1)
                ->schema([
                TextInput::make('title')->columnSpan(1),
                DateTimePicker::make('due_date_time')
                ->withoutSeconds()
                ->columnSpan(1),
                Textarea::make('homework')
                    ->rows(10)
                    ->columnSpan(1),
                         ])
            ];
        }

        public function submit()
        {
            $homeWork = $this->form->getState();
            $homeWork['employee_id']= \Auth::user()->employee->id;
            $homeWork['batch_id']= $this->batch->id;
            HT::create($homeWork);
            $this->showModal = false;
            Notification::make()
                ->title('HomeWork Added Successfully')
                ->success();

        }
        protected function getTableQuery(): Builder|Relation
        {
            return HT::query()->where('batch_id',$this->batch->id);
        }

        public function render()
        {
            return view('livewire.admin.filament.student.home-task');
        }
    }
