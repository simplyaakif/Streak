<?php

    namespace App\Http\Livewire\Admin\Finance;

    use App\Http\Controllers\RecoveriesController;
    use App\Models\Recovery;
    use Livewire\Component;
    use Livewire\WithPagination;

    class ReceivedTable extends Component {

        use withPagination;

        public function render()
        {
            return view('livewire.admin.finance.received-table',[
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
                    ->where('is_paid',1)
                    ->orderBy('paid_on')
                    ->paginate(50)
            ]);
        }
    }
