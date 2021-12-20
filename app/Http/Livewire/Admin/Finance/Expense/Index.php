<?php

    namespace App\Http\Livewire\Admin\Finance\Expense;

    use App\Models\Account;
    use App\Models\Expense;
    use App\Models\User;
    use Auth;
    use Livewire\Component;
    use Livewire\WithPagination;

    class Index extends Component {

        use withPagination;


        public $modal = false;
        public $showEditModal = false;
        public $showExpenseDetails = false;


        public Expense $editing;

        public $sortField = 'created_at';
        public $sortDirection = 'desc';

        public $accounts;
        public $users;

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

        public function rules()
        {
            return [
                'editing.amount' => 'required',
                'editing.paid_on' => 'nullable',
                'editing.paid_by' => 'numeric',
                'editing.paid_to' => 'string',
                'editing.is_paid' => 'nullable',
                'editing.type'=>'numeric',

            ];
        }

        public function delete($id)
        {
            $model = Expense::findOrFail($id);
            $model->delete();
        }

        public function makeBlankExpense()
        {
            return Expense::make();
        }

        public function edit(Expense $expense)
        {
            $this->showEditModal = true;
            $this->editing = $expense;
        }

        public function save()
        {
            $this->account_id = Auth::id();
            $this->validate();
            $this->editing->save();

        }
        public function show($expense)
        {
            $this->showExpenseDetails = $expense;
            $this->showExpense        = true;
        }

        public function submit()
        {
            $expense     = Expense::create($this->newExpense);
            $transaction = [
                'amount'     => $this->newExpense['amount'],
                'is_expense' => 1,
                'is_paid'    => 1,
                'paid_on'    => now(),
                'account_id' => $this->account_id
            ];

            $account         = Account::findOrFail($this->account_id);
            $account->amount = $account->amount - $this->newExpense['amount'];
            $account->save();
            $expense->transaction()->create($transaction);

        }

        public function mount()
        {
            $this->editing = $this->makeBlankExpense();
            $this->accounts = Account::all();
            $this->users = User::all();
            $this->account_id = Auth::id();
        }

        public function sortBy($field)
        {
            if($this->sortField === $field) {
                $this->sortDirection = $this->sortDirection === 'asc' ? 'desc' : 'asc';
            } else {
                $this->sortDirection = 'asc';
            }
            $this->sortField = $field;
        }

        public function resetFilters()
        {
            $this->reset('filters');
        }

        public function updatedFilters()
        {
            $this->resetPage();
        }


        public function render()
        {
            return view('livewire.admin.finance.expense.index', [
                'expenses' => Expense::paginate()
            ]);
        }
    }
