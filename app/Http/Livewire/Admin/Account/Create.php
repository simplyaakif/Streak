<?php

    namespace App\Http\Livewire\Admin\Account;

    use App\Models\Account;
    use Livewire\Component;

    class Create extends Component {

        public $account;
        protected $rules = [
            'account.title' => 'required|min:6',
            'account.account_number' => 'required',
            'account.amount' => 'required|numeric',
            'account.type' => 'required',
        ];
        public function submit()
        {

            $this->validate();
            Account::create($this->account);
            return redirect()->route('admin.accounts.index');
        }
        public function render()
        {
            return view('livewire.admin.account.create');
        }
    }
