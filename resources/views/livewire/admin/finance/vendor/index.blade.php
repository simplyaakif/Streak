<div>
    <div>
        <form wire:submit.prevent="submit">
            <x-modal.dialog wire:model="showModal">
                <x-slot name="title">Add Vendor</x-slot>
                <x-slot name="content">
                    <div class="grid grid-cols-2 gap-2">

                        <label for="">
                            Name
                            <x-common.data-input-text
                                name="name"
                                error="vendor.name"
                                wire:model.defer="vendor.name"/>
                        </label>
                        <label for="">
                            Mobile
                            <x-common.data-input-text
                                name="phone"
                                error="vendor.mobile"
                                wire:model.defer="vendor.mobile"/>
                        </label>

                        <label for="">
                            Type
                            <x-common.data-input-select name="type"
                                                        error="vendor.type"
                                                        wire:model.defer="vendor.type">
                                @foreach(App\Models\Vendor::TYPES as $val =>$label)
                                    <option value="{{$val}}">{{$label}}</option>
                                @endforeach
                            </x-common.data-input-select>
                        </label>
                        <label for="" class="col-span-2">
                            Address
                            <x-common.data-textarea
                                name="address"
                                error="vendor.address"
                                wire:model.defer="vendor.address">
                            </x-common.data-textarea>
                        </label>
                    </div>
                </x-slot>
                <x-slot name="footer">
                    <x-button.secondary wire:click="$set('showModal',false)">Cancel</x-button.secondary>
                    <x-button.primary type="submit">Submit</x-button.primary>
                </x-slot>
            </x-modal.dialog>
        </form>
    </div>
    <div>
        <x-button.primary wire:click="$set('showModal',true)" class="mb-4">Add Vendor</x-button.primary>
        <x-common.table>
            <x-slot name="head">
                <x-common.table.heading>Sr #</x-common.table.heading>
                <x-common.table.heading>Vendor Name</x-common.table.heading>
                <x-common.table.heading>Vendor Mobile</x-common.table.heading>
                <x-common.table.heading>Vendor Location</x-common.table.heading>
                <x-common.table.heading>Vendor Type</x-common.table.heading>
                <x-common.table.heading>Actions</x-common.table.heading>
            </x-slot>
            <x-slot name="body">
                @forelse($vendors as $vendor)
                    <x-common.table.row>
                        <x-common.table.cell>{{$loop->iteration}}</x-common.table.cell>
                        <x-common.table.cell>{{$vendor->name}}</x-common.table.cell>
                        <x-common.table.cell>{{$vendor->mobile}}</x-common.table.cell>
                        <x-common.table.cell>{{$vendor->address}}</x-common.table.cell>
                        <x-common.table.cell>{{$vendor->type_human}}</x-common.table.cell>
                        <x-common.table.cell></x-common.table.cell>
                    </x-common.table.row>
                @empty
                    <x-common.table.row>
                        <x-common.table.cell colspan="6" class="text-center">
                            <div class="py-10 flex justify-center items-center text-gray-300 text-xl">
                                No Expense Found...
                            </div>
                        </x-common.table.cell>
                    </x-common.table.row>
                @endforelse
            </x-slot>
        </x-common.table>
        {{$vendors->links()}}
    </div>
</div>
