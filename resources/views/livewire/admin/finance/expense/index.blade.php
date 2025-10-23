<div class="align-middle min-w-full overflow-x-auto space-y-4 overflow-hidden sm:rounded-lg">

    <div>
        <x-modal.dialog wire:model.live="showEditModal">
            <x-slot name="title">Create an Expense</x-slot>
            <x-slot name="content">
                <div class="grid sm:grid-cols-2 gap-2">
                    <div>
                        <label for="">Expense Vendor</label>
                        <x-common.data-input-select wire:model.live="editing.vendor_id"
                                                    error="editing.vendor_id">
                            <option value="0" >Select Vendor</option>
                            @foreach($vendors as $vendor)
                                <option value="{{$vendor->id}}">{{$vendor->name}}</option>
                            @endforeach
                        </x-common.data-input-select>
                    </div>

                    <div>
                        <label for="">Expense Amount</label>
                        <x-common.data-input-text type="number"
                                                  name="amount"
                                                  error="editing.amount"
                                                  wire:model="editing.amount" placeholder="Enter Expense Amount"/>
                    </div>

                    <div>
                        <label for="">Due Date</label>
                        <x-common.data-input-text type="date"
                                                  error="editing.due_date"
                                                  wire:model.live="editing.due_date"/>
                    </div>

                    <div>
                        <label for="">Is paid</label>
                        <x-common.data-input-select wire:model.live="editing.is_paid"
                                                    error="editing.is_paid">
                            <option value="0">No</option>
                            <option value="1">Yes</option>
                        </x-common.data-input-select>

                    </div>

                    @if($editing->is_paid)
                        <div class="grid sm:grid-cols-2 gap-2 col-span-2">
                            <div>
                                <label for="">Pay from Account</label>
                                <x-common.data-input-select
                                    error="account_id"
                                    wire:model.live="account_id">
                                    @foreach($accounts as $account)
                                        <option value="{{$account->id}}">{{$account->title}}</option>
                                    @endforeach
                                </x-common.data-input-select>
                            </div>

                            <div>
                                <label for="">Paid By</label>
                                <x-common.data-input-select
                                    error="editing.paid_by"
                                    wire:model="editing.paid_by">
                                    @foreach($users as $user)
                                        <option value="{{$user->id}}">{{$user->name}}</option>
                                    @endforeach
                                </x-common.data-input-select>
                            </div>

                            <div>
                                <label for="">Paid To</label>
                                <x-common.data-input-text wire:model.live="editing.paid_to"
                                                          name="name"
                                                          error="editing.paid_to"
                                                          placeholder="Enter Payee Name"/>
                            </div>
                            <div>
                                <label for="">Paid On</label>
                                <x-common.data-input-text type="date"
                                                          error="editing.paid_on"
                                                          wire:model.live="editing.paid_on"/>
                            </div>
                        </div>
                    @endif

                </div>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="showEditModal = false">Cancel</x-button.secondary>
                <x-button.primary wire:click="save">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </div>
    {{--    Filters--}}
    <div class="grid grid-cols-3 gap-2">
        <button
            class="btn btn-indigo text-center flex justify-center"
            wire:click="$toggle('showEditModal')">Create
        </button>

    </div>

    {{--    Table--}}
    <div>
        {{ $this->table }}
    </div>
{{--    <x-common.table>--}}
{{--        <x-slot name="head">--}}
{{--            <x-common.table.heading>#</x-common.table.heading>--}}
{{--            <x-common.table.heading>Vendor</x-common.table.heading>--}}
{{--            <x-common.table.heading>Amount</x-common.table.heading>--}}
{{--            <x-common.table.heading>Is Paid?</x-common.table.heading>--}}
{{--            <x-common.table.heading>Due Date</x-common.table.heading>--}}
{{--            <x-common.table.heading>Paid On</x-common.table.heading>--}}
{{--            <x-common.table.heading>Paid To</x-common.table.heading>--}}
{{--            <x-common.table.heading>Paid By</x-common.table.heading>--}}
{{--            <x-common.table.heading>Actions</x-common.table.heading>--}}
{{--        </x-slot>--}}
{{--        <x-slot name="body">--}}
{{--            @forelse($expenses as $expense)--}}
{{--                <x-common.table.row wire:loading.class.delay="opacity-50">--}}
{{--                    <x-common.table.cell>{{$expenses->firstItem() + $loop->index}}</x-common.table.cell>--}}

{{--                    <x-common.table.cell>{{$expense->vendor->name}}</x-common.table.cell>--}}
{{--                    <x-common.table.cell>{{$expense->amount}} Rs</x-common.table.cell>--}}
{{--                    <x-common.table.cell>{{$expense->is_paid_human}}</x-common.table.cell>--}}
{{--                    <x-common.table.cell>{{$expense->due_date_human}}</x-common.table.cell>--}}
{{--                    <x-common.table.cell>{{$expense->paid_on_human}}</x-common.table.cell>--}}
{{--                    <x-common.table.cell>{{$expense->paid_to}}</x-common.table.cell>--}}
{{--                    <x-common.table.cell>{{$expense->paid_by}}</x-common.table.cell>--}}
{{--                    <x-common.table.cell>--}}
{{--                        <div class="flex space-x-2 items-center">--}}
{{--                            @can('expense_show')--}}
{{--                                <a href="{{route('admin.queries.show',$expense->id)}}">--}}
{{--                                    <x-icons.eye class="w-6 h-6  text-cyan-700"/>--}}
{{--                                </a>--}}
{{--                            @endcan--}}

{{--                            @can('expense_edit')--}}
{{--                                <a href="#" wire:click.prevent="edit({{$expense->id}})">--}}
{{--                                    <x-icons.edit class="w-5 h-5  text-blue-700"/>--}}
{{--                                </a>--}}
{{--                            @endcan--}}

{{--                            @can('expense_delete')--}}
{{--                                <a href="#" wire:click.prevent="delete({{$expense->id}})">--}}
{{--                                    <x-icons.trash class="w-5 h-5  text-red-700"/>--}}
{{--                                </a>--}}
{{--                            @endcan--}}
{{--                        </div>--}}
{{--                    </x-common.table.cell>--}}
{{--                </x-common.table.row>--}}
{{--            @empty--}}
{{--                <x-common.table.row wire:loading.class.delay="opacity-50">--}}
{{--                    <x-common.table.cell colspan="9">--}}
{{--                        <div class="py-10 flex justify-center items-center text-gray-300 text-xl">--}}
{{--                            No Expense Found...--}}
{{--                        </div>--}}
{{--                    </x-common.table.cell>--}}
{{--                </x-common.table.row>--}}
{{--            @endforelse--}}
{{--        </x-slot>--}}
{{--    </x-common.table>--}}
    <div>
{{--        {{$expenses->links()}}--}}
    </div>
</div>
