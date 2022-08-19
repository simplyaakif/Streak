<?php

    namespace App\Http\Livewire\Admin\Filament\Recovery;

    use App\Models\Account;
    use App\Models\Batch;
    use App\Models\BatchStudent;
    use App\Models\Recovery;
    use Filament\Forms\ComponentContainer;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\Grid;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\TextInput;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Columns\BooleanColumn;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Filament\Tables\Filters\Filter;
    use Filament\Tables\Filters\Layout;
    use Filament\Tables\Filters\SelectFilter;
    use Filament\Tables\Filters\TernaryFilter;
    use Illuminate\Database\Eloquent\Builder;
        use Illuminate\Database\Eloquent\Relations\Relation;
    use Livewire\Component;

        class RecoveryIndex extends Component implements HasTable {

            use InteractsWithTable;

            public function mount()
            {

            }
            protected function getTableColumns(): array
            {
                return [
                    TextColumn::make('student.name'),
                    TextColumn::make('batch.title')->label('Batch'),
                    TextColumn::make('batch_student.status')->label('Status'),
                    TextColumn::make('amount')->suffix(' Rs'),
                    TextColumn::make('due_date')->date('d-M-Y')->sortable(),
                    BooleanColumn::make('is_paid'),
                    TextColumn::make('slip_number'),
                    TextColumn::make('paid_on')->date('d-M-Y')->sortable(),

                ];
            }

            protected function getTableFilters(): array
            {
                return [

                    Filter::make('due_date')
                        ->form([
                                   DatePicker::make('due_from'),
                                   DatePicker::make('due_until'),
                               ])
                        ->query(function (Builder $query, array $data): Builder {
                            return $query
                                ->when(
                                    $data['due_from'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('due_date', '>=', $date),
                                )
                                ->when(
                                    $data['due_until'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('due_date', '<=', $date),
                                );
                        }),
                    Filter::make('paid_on')
                        ->form([
                                   DatePicker::make('paid_from'),
                                   DatePicker::make('paid_until'),
                               ])
                        ->query(function (Builder $query, array $data): Builder {
                            return $query
                                ->when(
                                    $data['paid_from'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('paid_on', '>=', $date),
                                )
                                ->when(
                                    $data['paid_until'],
                                    fn (Builder $query, $date): Builder => $query->whereDate('paid_on', '<=', $date),
                                );
                        }),
                    TernaryFilter::make('is_paid')->label('Is Paid ?'),
                    SelectFilter::make('batch_id')->label('Batch')
                        ->options(Batch::all()->pluck('title','id')),
//                    SelectFilter::make('status')->label('Status')
//                        ->options(BatchStudent::STATUS)
//                    ->column('batch_student.batch_status'),

//                    Filter::make('Status')
//                        ->form([
//                                 Select::make('status')
//                                ->options(BatchStudent::STATUS),
//                               ])
//                        ->query(function (Builder $query, array $data): Builder {
//                            return $query->join('batch_student','batch_student.id','=','recoveries.batch_student_id')
//                                ->where('batch_status','=',$data['status']);
//                        })
                ];
            }
            protected function getTableActions(): array
            {
                return [
                  Action::make('Student')
                      ->url(fn (Recovery $record): string => route('admin.students.show', $record->student_id))
                      ->openUrlInNewTab(),
                  Action::make('Pay')
                      ->mountUsing(fn (ComponentContainer $form, Recovery $record) => $form->fill([
                        'amount' => $record->amount,
                        'name' => $record->student->name,
                        'batch' => $record->batch->title,
                    ]))
                      ->form([
                          Grid::make(3)
                      ->schema([
                            TextInput::make('name')
                            ->disabled(),
                            TextInput::make('batch')
                            ->disabled(),
                            TextInput::make('amount')
                            ->disabled(),
                            Select::make('account_id')
                            ->options(Account::all()->pluck('title','id')),
                            TextInput::make('slip_number')
                            ->label('Transaction ID/Slip #'),
                            DatePicker::make('paid_on')
                            ->label('Date of Payment')
                             ])
                           ])
                      ->action(function (Recovery $record, array $data){
                          if($record->is_paid){
                              abort(403);
                          }
                          $record->is_paid = 1;
                          $record->account_id = $data['account_id'];
                          $record->slip_number = $data['slip_number'];
                          $record->paid_on = $data['paid_on'];
                          $record->save();
                      })
                      ->visible(fn (Recovery $record): bool =>  !$record->is_paid),
                ];
            }

            protected function getTableQuery(): Builder|Relation
            {
                return Recovery::query();
            }

            protected function getTableContentFooter()
            {
                return view('admin.filament.Recovery.footer_sum');
            }

            protected function getTableFiltersLayout(): ?string
            {
                return Layout::AboveContent;
            }

            protected function getDefaultTableSortColumn(): ?string
            {
                return 'due_date';
            }

            protected function getDefaultTableSortDirection(): ?string
            {
                return 'asc';
            }

            public function render()
            {
                return view('livewire.admin.filament.recovery.recovery-index');
            }
        }
