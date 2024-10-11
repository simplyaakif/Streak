<?php

    namespace App\Livewire\Admin\Finance\Income;

    use App\Models\Account;
    use App\Models\Income;
    use App\Models\User;
    use Carbon\Carbon;
    use Illuminate\Support\Facades\Auth;
    use Livewire\Component;
    use Livewire\WithPagination;

    class Index extends Component {

        use withPagination;

        public $accounts;
        public $users;
        public $showEditModal = false;
        public $showDeleteModal = false;

        public $account_id = "";
        public $delete_id;
        public $is_editing = false;

        public Income $editing;

        public function rules()
        {
            return [
                'editing.type'    => 'required',
                'editing.amount'  => 'numeric|required',
                'editing.paid_on' => 'nullable',
                'editing.paid_by' => 'string|required',
                'editing.user_id' => 'integer|required',
                'editing.remarks' => 'string',
                'account_id'      => 'required',
            ];
        }

        public function makeBlankIncome()
        {
            return Income::make([
                                    'type'       => "",
                                    'created_at' => now(),
                                    'user_id'    => Auth::id()
                                ]);
        }

        public function mount()
        {
            $this->users    = User::all();
            $this->accounts = Account::all();
            $this->editing  = $this->makeBlankIncome();
        }

        public function create()
        {
            if($this->editing->getKey())
                $this->editing = $this->makeBlankIncome();
            $this->showEditModal = true;

        }

        public function edit(Income $income)
        {
            $this->is_editing = true;
            if($this->editing->isNot($income))
                $this->editing = $income;
            $this->showEditModal = true;
        }

        public function confirmDelete($id)
        {
            $this->showDeleteModal = true;
            $this->delete_id       = $id;

        }

        public function delete()
        {
            $income = Income::find($this->delete_id);
            $income->delete();
            $this->showDeleteModal = false;
        }

        public function save()
        {
            $this->validate();
            $income = $this->editing;
            $income->save();

            if($this->is_editing) {
                $transaction = $income->transaction;
                $transaction->amount     = $this->editing->amount;
                $transaction->account_id = $this->account_id;
                $income->transaction()->save($transaction);
                $this->is_editing = false;

            } else {
                $income->transaction()->create([
                                                   'account_id' => $this->account_id,
                                                   'is_paid'    => 1,
                                                   'amount'     => $this->editing->amount,
                                                   'paid_on'    => now()
                                               ]);
            }

            $this->showEditModal = false;
        }

        public function render()
        {
            return view('livewire.admin.finance.income.index', [
                'incomes' => Income::with('user')->with('transaction')->paginate(10)
            ]);
        }
    }
