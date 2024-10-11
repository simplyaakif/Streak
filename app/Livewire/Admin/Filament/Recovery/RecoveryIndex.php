<?php

    namespace App\Livewire\Admin\Filament\Recovery;

    use App\Models\Account;
    use App\Models\Batch;
    use App\Models\BatchStudent;
    use App\Models\Recovery;
    use Filament\Forms\ComponentContainer;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\Grid;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Concerns\InteractsWithForms;
    use Filament\Forms\Contracts\HasForms;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Columns\BooleanColumn;
    use Filament\Tables\Columns\ImageColumn;
    use Filament\Tables\Columns\SpatieMediaLibraryImageColumn;
    use Filament\Tables\Columns\Summarizers\Sum;
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

        class RecoveryIndex extends Component implements HasForms, HasTable {

            use InteractsWithTable;
            use InteractsWithForms;

            public function mount()
            {

            }
            public function table(Table $table): Table
            {
                return $table
                    ->query(Recovery::query())
                    ->columns([
                        SpatieMediaLibraryImageColumn::make('student.dp')
                            ->collection('student_dp')
                            ->label('DP')->toggleable()->circular(),
                    TextColumn::make('student.name')->searchable()->sortable(),
                    TextColumn::make('student.mobile')->label('Contact')->toggleable(),
                        TextColumn::make('student.father_name')->label('Father Name')->toggleable(),
                    TextColumn::make('batch.title')->label('Batch'),
                    TextColumn::make('batch_student.status')->label('Status'),
                    TextColumn::make('due_date')->date('d-M-Y')->sortable(),
                    TextColumn::make('amount')->sortable()->suffix(' Rs')->summarize(Sum::make()->label('Total')->money('PKR')),
                    BooleanColumn::make('is_paid'),
                    TextColumn::make('paid_on')->date('d-M-Y')->sortable(),
                    TextColumn::make('account.title')->sortable(),
                    TextColumn::make('slip_number')->toggleable(),

                ])->filters([
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
                        SelectFilter::make('account_id')
                    ->multiple()
                    ->label('Account')
                    ->options(Account::all()->pluck('title', 'id')),
                        SelectFilter::make('batch_id')
                            ->multiple()
                            ->label('Batch')
                            ->options(Batch::all()->pluck('title','id')),

                        Filter::make('Status')
                            ->form([
//                            MultiSelect::make('status')
                                Select::make('status')
//                                ->multiple()
                                    ->options(BatchStudent::STATUS),
                            ])
                            ->query(function (Builder $query, array $data): Builder {
                                return $query
                                    ->when($data['status'],function ($q,$status){
                                        $q->join('batch_student','batch_student_id','=','batch_student.id')
                                            ->where('batch_student_id',$status);
                                    });
//                                ->join('batch_student','recovery.batch_student_id','=','batch_student.id')
//                                ->where('batch_status','=',$data['status']);
                            })
                    ],FiltersLayout::AboveContent)
                    ->actions([
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
                ]);
            }

//                    ->join('batch_student','batch_student.id','=','recoveries.batch_student_id');






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
