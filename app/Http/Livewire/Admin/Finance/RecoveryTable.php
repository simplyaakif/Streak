<?php

    namespace App\Http\Livewire\Admin\Finance;

    use App\Models\Account;
    use App\Models\Recovery;
    use Livewire\Component;

    class RecoveryTable extends Component {
        public $showModal = false;
        public Recovery $recovery;
        public $accounts;

        protected $rules = [
            'recovery.amount' => 'required', //whatever rules you want
            'recovery.account_id' => 'required',
            'recovery.slip_number' => 'required',
            'recovery.paid_on' => 'required',
        ];

        public function mount()
        {
            $this->accounts = Account::all();
            $this->recovery = Recovery::make([]);
        }

        public function showModal(Recovery $recovery){
            $this->recovery = $recovery;
            $this->showModal = true;
//            dd($this->recovery);
        }

        public function submit()
        {
            $this->validate();
            $this->recovery->is_paid = true;
            $this->recovery->save();
            $this->showModal = false;
            $this->redirectRoute('admin.recovery.received');
        }

        public function render()
        {
            return view('livewire.admin.finance.recovery-table',[
                'recoveries'=>Recovery::query()
                    ->with('student',function($query){
                        $query->withTrashed();
                    })
                    ->with('batch',function($batch){
                        $batch->withTrashed();
                    })
                    ->with('course',function($course){
                        $course->withTrashed();
                    })
                    ->where('is_paid',0)
                    ->latest()
                    ->paginate(50),
            ]);
        }
    }
