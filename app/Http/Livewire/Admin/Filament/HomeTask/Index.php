<?php

    namespace App\Http\Livewire\Admin\Filament\HomeTask;

    use App\Models\Batch;
    use App\Models\Employee;
    use App\Models\HomeTask;
    use App\Models\Lesson;
    use Filament\Forms\ComponentContainer;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\DateTimePicker;
    use Filament\Forms\Components\Grid;
    use Filament\Forms\Components\Textarea;
    use Filament\Forms\Components\TextInput;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Filament\Tables\Filters\Filter;
    use Filament\Tables\Filters\Layout;
    use Filament\Tables\Filters\MultiSelectFilter;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

    class Index extends Component implements HasTable {

        use InteractsWithTable;

        public function mount()
        {

        }
        protected function getTableColumns(): array
        {
            return [
                TextColumn::make('title')->searchable(),
                TextColumn::make('batch.title'),
                TextColumn::make('due_date_time')->date('D d-M-Y')->sortable(),
                TextColumn::make('employee.name')->label('Instructor'),
            ];
        }
        protected function getTableActions(): array
        {
            return [
                Action::make('edit')
                    ->label('View')
                    ->mountUsing(fn (ComponentContainer $form, HomeTask $record) => $form->fill([
      'title' => $record->title,
      'due_date_time' => $record->due_date_time,
      'employee_id' => $record->empolyee_id,
      'batch_id' => $record->batch_id,
      'homework'=>$record->homework,
                                                                                              ]))
                    ->action(function (HomeTask $record, array $data): void {
                        $record->save();
                    })
                    ->form([
                               Grid::make('2')
                                   ->schema([

                                                TextInput::make('title')->disabled(),
                                                DateTimePicker::make('due_date_time')->disabled(),
                                                Textarea::make('homework')->disabled()->columnSpan(2),
                                            ])
                           ])
                    ->modalButton('Close')
            ];
        }


        protected function getTableFilters(): array
        {
            return [
                Filter::make('date')
                    ->form([
                               DatePicker::make('created_from'),
                               DatePicker::make('created_until'),
                           ])
                    ->query(function (Builder $query, array $data): Builder {
                        return $query
                            ->when(
                                $data['created_from'],
                                fn (Builder $query, $date): Builder => $query->whereDate('date', '>=', $date),
                            )
                            ->when(
                                $data['created_until'],
                                fn (Builder $query, $date): Builder => $query->whereDate('date', '<=', $date),
                            );
                    }),
                MultiSelectFilter::make('batch')
                    ->options(Batch::all()->pluck('title','id'))
                    ->column('batch_id'),
                MultiSelectFilter::make('employee')
                    ->label('Instructor')
                    ->options(Employee::all()->pluck('name','id'))
                    ->column('employee_id'),
            ];
        }

        protected function getTableFiltersLayout(): ?string
        {
            return Layout::AboveContent;
        }

        protected function getDefaultTableSortColumn(): ?string
        {
            return 'created_at';
        }
        protected function getDefaultTableSortDirection(): ?string
        {
            return 'desc';
        }
        protected function getTableQuery(): Builder|Relation
        {
            return HomeTask::query();
        }

        public function render()
        {
            return view('livewire.admin.filament.home-task.index');
        }
    }
