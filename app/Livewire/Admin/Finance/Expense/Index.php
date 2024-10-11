<?php

    namespace App\Livewire\Admin\Finance\Expense;

    use App\Models\Account;
    use App\Models\Employee;
    use App\Models\Expense;
    use App\Models\Recovery;
    use App\Models\User;
    use App\Models\Vendor;
    use Auth;
    use Filament\Forms\ComponentContainer;
    use Filament\Forms\Components\DatePicker;
    use Filament\Forms\Components\Grid;
    use Filament\Forms\Components\Select;
    use Filament\Forms\Components\TextInput;
    use Filament\Forms\Components\Toggle;
    use Filament\Tables\Actions\Action;
    use Filament\Tables\Actions\BulkAction;
    use Filament\Tables\Columns\BooleanColumn;
    use Filament\Tables\Columns\TextColumn;
    use Filament\Tables\Concerns\InteractsWithTable;
    use Filament\Tables\Contracts\HasTable;
    use Filament\Tables\Filters\Filter;
    use Filament\Tables\Filters\Layout;
    use Filament\Tables\Filters\MultiSelectFilter;
    use Filament\Tables\Filters\SelectFilter;
    use Filament\Tables\Filters\TernaryFilter;
    use Illuminate\Contracts\View\View;
    use Illuminate\Database\Eloquent\Builder;
    use Illuminate\Support\Collection;
    use Livewire\Component;

    class Index extends Component implements HasTable {

        use InteractsWithTable;

//        use withPagination;


        public $modal = false;
        public $showEditModal = false;
        public $showExpenseDetails = false;


        public Expense $editing;

        public $sortField = 'created_at';
        public $sortDirection = 'desc';

        public $accounts;
        public $users;
        public $vendors;

        public Expense $expense;
        public $newExpense;
        public $account_id;
        public $delete_id;
        public $filters
            = [
                'search'   => null,
                'course'   => '',
                'date_min' => null,
                'date_max' => null,
            ];

        protected $expenseString
            = [
                'sortField',
                'sortDirection'
            ];


        protected function getTableQuery(): Builder
        {
            return Expense::query()->with('vendor')->latest();
        }

        protected function applySearchToTableQuery(Builder $query): Builder
        {
            if(filled($searchQuery = $this->getTableSearchQuery())) {
                $query->search('name', $searchQuery)->search('amount', $searchQuery)->get();
            }

            return $query;
        }

        protected function getTableColumns(): array
        {
            return [
                TextColumn::make('vendor.type_human')->label('Expense Type'),
                TextColumn::make('vendor.name')->label('Expense Type'),
                TextColumn::make('amount')->label('Expense Amount'),
                BooleanColumn::make('is_paid')->label('Paid')->trueColor('primary')->falseColor('danger'),
                TextColumn::make('created_at')->label('Created At')->date('d-m-Y'),
                TextColumn::make('due_date')->label('Due Date')->date('d-m-Y'),
                TextColumn::make('paid_on')->label('Paid On')->date('d-m-Y'),
                TextColumn::make('paid_to')->label('Paid To'),
                TextColumn::make('employee.name')->label('Paid By'),


            ];
        }

        public function isTableSearchable(): bool
        {
            return true;
        }

        protected function getTableFilters(): array
        {
            return [

                Filter::make('due_date')->form([
                                                   DatePicker::make('due_from'),
                                                   DatePicker::make('due_until'),
                                               ])->query(function (Builder $query, array $data): Builder {
                        return $query->when($data['due_from'], fn(Builder $query, $date): Builder => $query->whereDate('due_date', '>=', $date),)->when($data['due_until'], fn(Builder $query, $date): Builder => $query->whereDate('due_date', '<=', $date),);
                    }),
                Filter::make('paid_on')->form([
                                                  DatePicker::make('paid_on_from'),
                                                  DatePicker::make('paid_on_until'),
                                              ])->query(function (Builder $query, array $data): Builder {
                        return $query->when($data['paid_on_from'], fn(Builder $query, $date): Builder => $query->whereDate('paid_on', '>=', $date),)->when($data['paid_on_until'], fn(Builder $query, $date): Builder => $query->whereDate('paid_on', '<=', $date),);
                    }),
                MultiSelectFilter::make('vendor')->relationship('vendor', 'name'),
                SelectFilter::make('is_paid')
                    ->options([
                                  '0' => 'Unpaid',
                                  '1' => 'Paid',
                              ]),
//                SelectFilter::make('vendor.type')
//                ->relationship('vendor','type'),
//                SelectFilter::make('vendors.type')
//                    ->label('Expense Type')
//                    ->options([
//                                  '0' => 'Rental',
//                                  '1' => 'Utility Bills',
//                                  '2' => 'Marketing',
//                                  '3' => 'Misc',
//                              ])
//                                ->query(function (Builder $query, $data):Builder {
//                                    return $query->when($data,fn(Builder $query,$type):Builder=>$query->with('vendor')->where('vendors.type',$type)
//                                    );
//                                }),
            ];
        }

        protected function getTableFiltersLayout(): ?string
        {
            return \Filament\Tables\Enums\FiltersLayout::AboveContent;
        }

        protected function getTableContentFooter(): ?View
        {
            return view('admin.filament.tables.footer.row');
        }

        protected function getTableActions(): array
        {
            return [
                Action::make('pay_now')->action(fn(Expense $record): string => $record->pay_now())->color('primary')
                    ->requiresConfirmation(),

                Action::make('edit')
                    ->mountUsing(fn (ComponentContainer $form, Expense $record) => $form->fill([
                            'amount' => $record->amount,
                            'is_paid' => $record->is_paid,
                            'due_date' => $record->due_date,
                            'paid_on' => $record->paid_on,
                            'paid_to' => $record->paid_to,
                            'paid_by' => $record->paid_by,
                                                                                                ]))
                ->form([
                    Grid::make()
                    ->schema([
                        TextInput::make('amount')->required(),
                        DatePicker::make('due_date')->required(),
                        DatePicker::make('paid_on'),
                        TextInput::make('paid_to'),
                        Select::make('paid_by')
                        ->options(Employee::where('is_active',1)->get()->pluck('name','id')),
                        Toggle::make('is_paid'),
                             ])
                       ])
                ->action(function (Expense $record, $data){
                    $record->amount = $data['amount'];
                    $record->is_paid = $data['is_paid'];
                    $record->due_date = $data['due_date'];
                    $record->paid_on = $data['paid_on'];
                    $record->paid_to = $data['paid_to'];
                    $record->paid_by = $data['paid_by'];
                    $record->save();
                }),
                Action::make('delete')->action(fn(Expense $record): string => $record->delete())->color('danger')
                    ->requiresConfirmation(),
            ];
        }

        protected function getTableBulkActions(): array
        {
            return [
                BulkAction::make('delete')->action(fn(Collection $records) => $records->each->delete())->deselectRecordsAfterCompletion()->color('danger')
//                    ->icon('heroicon-o-trash')
                    ->requiresConfirmation()
            ];
        }

//        protected function getTableFiltersFormColumns(): int
//        {
//            return 3;
//        }


        public function rules()
        {
            return [
                'editing.amount'    => 'required',
                'editing.vendor_id' => 'required',

                'account_id'       => 'nullable',
                'editing.paid_on'  => 'nullable',
                'editing.paid_to'  => 'nullable',
                'editing.paid_by'  => 'nullable',
                'editing.is_paid'  => 'nullable',
                'editing.due_date' => 'required',

            ];
        }

        public function delete($id)
        {
            $model = Expense::findOrFail($id);
            $model->delete();
            $this->redirectRoute('admin.expenses.index');
        }

        public function makeBlankExpense()
        {
            return Expense::make([
                                     'paid_on' => null
                                 ]);
        }


        public function save()
        {
            $this->account_id = Auth::id();
            $this->validate();
//            dd('Working');
            $this->editing->save();
            $this->redirectRoute('admin.expenses.index');


        }

        public function submit()
        {
            $expense     = Expense::create($this->newExpense);
            $transaction = [
                'amount'     => $this->newExpense['amount'],
                'is_expense' => 1,
                'is_paid'    => 0,
                'account_id' => $this->account_id
            ];

            $account         = Account::findOrFail($this->account_id);
            $account->amount = $account->amount - $this->newExpense['amount'];
            $account->save();
            $expense->transaction()->create($transaction);
            $this->redirectRoute('admin.expenses.index');

        }

        public function mount()
        {
            $this->editing    = $this->makeBlankExpense();
            $this->accounts   = Account::all();
            $this->vendors    = Vendor::all();
            $this->users      = User::where('is_staff', 1)->get();
            $this->account_id = Auth::id();
        }


        public function render()
        {
            return view('livewire.admin.finance.expense.index');
        }
    }
