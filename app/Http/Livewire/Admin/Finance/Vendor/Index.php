<?php

    namespace App\Http\Livewire\Admin\Finance\Vendor;

    use App\Models\Vendor;
    use Livewire\Component;
    use Livewire\WithPagination;

    class Index extends Component {

        use withPagination;
        public $showModal = false;

        public Vendor $vendor;

        public function mount()
        {
            $this->vendor = Vendor::make();
        }
        public function rules()
        {
            return [
                'vendor.name'=>'required',
                'vendor.mobile'=>'required',
                'vendor.address'=>'nullable',
                'vendor.type'=>'required',
            ];
        }
        public function submit()
        {
            $this->validate();
            $this->vendor->save();
            $this->showModal = false;
            $this->vendor = Vendor::make();

        }
        public function render()
        {
            return view('livewire.admin.finance.vendor.index',[
                'vendors'=>Vendor::paginate(30)
            ]);
        }
    }
