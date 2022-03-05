<?php

    namespace App\Http\Livewire\Admin\Finance;

    use App\Models\Recovery;
    use Livewire\Component;

    class RecoveryTable extends Component {

        public function render()
        {
            return view('livewire.admin.finance.recovery-table',[
                'recoveries'=>Recovery::with('batch','course')
                    ->with('student',function($query){
                        $query->withTrashed();
                    })
                    ->where('is_paid',0)
                    ->paginate(10),
            ]);
        }
    }
