<?php

    namespace App\Livewire\Admin\Communication\Sms;

    use App\Models\Sms;
    use Livewire\Component;
    use Livewire\WithPagination;

    class Index extends Component {

        use WithPagination;
        public $smses = [];

        public function mount()
        {
//            $this->smses = Sms::all();
        }

        public function render()
        {
            return view('livewire.admin.communication.sms.index',[
                'smses' => Sms::paginate(10),
            ]);
        }
    }
