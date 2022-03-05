<?php

    namespace App\Http\Livewire\Admin\Finance;

    use App\Models\Recovery;
    use Livewire\Component;

    class RecoveryTable extends Component {

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
                    ->paginate(10),
            ]);
        }
    }
