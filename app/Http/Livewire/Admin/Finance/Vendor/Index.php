<?php

    namespace App\Http\Livewire\Admin\Finance\Vendor;

    use Livewire\Component;

    class Index extends Component {

        public $showModal = false;
        public function submit()
        {

        }
        public function render()
        {
            return view('livewire.admin.finance.vendor.index');
        }
    }
