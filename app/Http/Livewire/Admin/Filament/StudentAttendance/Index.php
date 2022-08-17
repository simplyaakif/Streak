<?php

    namespace App\Http\Livewire\Admin\Filament\StudentAttendance;

    use App\Models\Batch;
    use App\Models\Employee;
    use App\Models\StudentAttendance;
    use Filament\Forms\Components\DatePicker;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Filament\Tables\Filters\Filter;
    use Filament\Tables\Filters\Layout;
    use Filament\Tables\Filters\MultiSelectFilter;
    use Filament\Tables\Filters\SelectFilter;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;
    use Webbingbrasil\FilamentAdvancedFilter\Filters\DateFilter;

    class Index extends Component implements HasTable {

        use InteractsWithTable;

        protected function getTableQuery(): Builder|Relation
        {
            return StudentAttendance::query();
        }

        protected function getTableColumns(): array
        {
            return[
                TextColumn::make('batch.title'),
                TextColumn::make('attendance_status'),
                TextColumn::make('day')->label('Day'),
                TextColumn::make('datetime')->dateTime('h:i d-M-Y')->label('Date'),
                TextColumn::make('employee.name')->label('Taken By'),

            ];
        }
        protected function getTableFilters(): array
        {
            return [
                    MultiSelectFilter::make('Batches')
                    ->options(Batch::pluck('title','id' ))
                        ->column('batch_id'),
                    SelectFilter::make('Taken By')
                    ->options(Employee::where('is_active',1)
                                  ->pluck('name','id' ))
                        ->column('employee_id'),
                    Filter::make('Date')
                        ->form([
                                   DatePicker::make('created_from'),
                                   DatePicker::make('created_until'),
                               ])
                        ->query(function (Builder $query, array $data): Builder {
                            return $query
                                ->when(
                                    $data['created_from'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('datetime', '>=', $date),
                                )
                                ->when(
                                    $data['created_until'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('datetime', '<=', $date),
                                );
                        })

            ];
        }
        protected function getTableFiltersFormColumns(): int
        {
            return 3;
        }

        protected function getDefaultTableSortColumn(): ?string
        {
            return 'created_at';
        }
        protected function getTableFiltersLayout(): ?string
        {
            return Layout::AboveContent;
        }
        protected function getDefaultTableSortDirection(): ?string
        {
            return 'desc';
        }

        public function render()
        {
            return view('livewire.admin.filament.student.attendance-show');
        }
    }
