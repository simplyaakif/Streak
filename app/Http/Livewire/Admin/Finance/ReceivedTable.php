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
                'recoveries'=>Recovery::with('student','batch','course')->where('is_paid',1)->paginate(10),
            ]);
        }
    }
