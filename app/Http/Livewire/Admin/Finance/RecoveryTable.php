<?php

    namespace App\Http\Livewire\Admin\Finance;

    use App\Models\Account;
    use App\Models\Recovery;
    use Livewire\Component;

    class RecoveryTable extends Component {
        public $showModal = false;
        public $showEditModal = false;
        public Recovery $recovery;
        public Recovery $editRecovery;
        public $oldRecoveries = [];
        public $newRecoveries = [];
        public $accounts;
        public $remainingAmount =0;

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

        public function addInstallment()
        {
            $amountRemaining = collect($this->oldRecoveries)->sum('amount') - collect($this->newRecoveries)->sum('amount') ;
            $this->remainingAmount = $amountRemaining;
            $installment_count = count($this->newRecoveries);
            $this->newRecoveries[] = [
                'amount'=>$amountRemaining,
                'due_date'=>now()->addMonths($installment_count)->addDay()->format('Y-m-d'),
                'batch_student_id'=>$this->editRecovery->batch_student_id,
                'batch_id'=>$this->editRecovery->batch_id,
                'student_id'=>$this->editRecovery->student_id,
                'is_paid'=>0,
                'course_id'=>$this->editRecovery->course_id,
            ];
        }
        public function removeInstallment($k)
        {
            unset($this->newRecoveries[$k]);
            $this->newRecoveries = array_values($this->newRecoveries);
        }

        public function updateNewRecoveries()
        {
//            dd($this->newRecoveries);
           $deleted = Recovery::
                where('batch_id',$this->editRecovery->batch_id)
                ->where('student_id',$this->editRecovery->student_id)
                ->where('batch_student_id',$this->editRecovery->batch_student_id)
                ->where('is_paid',false)
                ->delete();
//           dd($deleted);

           foreach($this->newRecoveries as $recovery){
               Recovery::create($recovery);
           }

           $this->redirectRoute('admin.recovery.received');


        }

        public function showModal(Recovery $recovery){
            $this->recovery = $recovery;
            $this->showModal = true;
//            dd($this->recovery);
        }

        public function showEditModal(Recovery $recovery)
        {
            $this->editRecovery = $recovery;
            $this->newRecoveries = [];
            $this->showEditModal = true;
            $recoveries = Recovery::with('student','batch','course')
                ->where('batch_id',$recovery->batch_id)
                ->where('student_id',$recovery->student_id)
                ->where('batch_student_id',$recovery->batch_student_id)
                ->where('is_paid',false)
                ->get();
            $this->remainingAmount = collect($recoveries)->sum('amount');
            $this->oldRecoveries = $recoveries;
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
