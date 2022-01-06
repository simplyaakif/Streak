<div class="align-middle min-w-full overflow-x-auto space-y-4 overflow-hidden sm:rounded-lg">

    <div>
        <x-modal.dialog wire:model="showEditModal">
            <x-slot name="title">Create a new Expense</x-slot>
            <x-slot name="content">
                <div class="grid sm:grid-cols-2 gap-2">
                    <div>
                        <label for="">Expense Type</label>
                        <x-common.data-input-select wire:model="editing.type">
                            @foreach(App\Models\Expense::types as $val =>$label)
                                <option value="{{$val}}">{{$label}}</option>
                            @endforeach
                        </x-common.data-input-select>
                    </div>

                    <div>
                        <label for="">Expense Amount</label>
                        <x-common.data-input-text wire:model="editing.amount" placeholder="Enter Expense Amount"/>
                    </div>

                    <div>
                        <label for="">Pay from Account</label>
                        <x-common.data-input-select wire:model="account_id">
                            @foreach($accounts as $account)
                                <option value="{{$account->id}}">{{$account->title}}</option>
                            @endforeach
                        </x-common.data-input-select>
                    </div>

                    <div>
                        <label for="">Paid By</label>
                        <x-common.data-input-select  wire:model="editing.paid_by">
                            @foreach($users as $user)
                                <option  value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </x-common.data-input-select>
                    </div>

                    <div>
                        <label for="">Paid To</label>
                        <x-common.data-input-text wire:model="editing.paid_to" placeholder="Enter Payee Name"/>
                    </div>

                    <div>
                        <label for="">Paid On</label>
                        <x-common.data-input-text type="date" wire:model="editing.paid_on"/>
                    </div>
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="$set('showEditModal', false)">Cancel</x-button.secondary>
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
        {{--        <x-common.filter-wrapper label="Search by Name">--}}
        {{--            <x-common.data-input-text wire:model="filters.search" placeholder="Search Query by Name"/>--}}
        {{--        </x-common.filter-wrapper>--}}
        {{--        <div>--}}

        {{--            <x-common.filter-select label="Select Course"  >--}}
        {{--                <x-common.data-input-text/>--}}
        {{--            </x-common.filter-select>--}}
        {{--        </div>--}}
        {{--        <div>--}}
        {{--            <x-common.filter-date-interval label="Added Dates"/>--}}
        {{--        </div>--}}

    </div>

    {{--    Table--}}
    <x-common.table>
        <x-slot name="head">
            <x-common.table.heading>#</x-common.table.heading>
            <x-common.table.heading>Type</x-common.table.heading>
            <x-common.table.heading>Amount</x-common.table.heading>
            <x-common.table.heading>Status</x-common.table.heading>
            <x-common.table.heading>Date of Payment</x-common.table.heading>
            <x-common.table.heading>Paid To</x-common.table.heading>
            <x-common.table.heading>Paid By</x-common.table.heading>
            <x-common.table.heading>Actions</x-common.table.heading>
        </x-slot>
        <x-slot name="body">
            @forelse($expenses as $expense)
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    <x-common.table.cell>{{$expenses->firstItem() + $loop->index}}</x-common.table.cell>

                    <x-common.table.cell>{{$expense->type}}</x-common.table.cell>
                    <x-common.table.cell>{{$expense->amount}} Rs</x-common.table.cell>
                    <x-common.table.cell>{{$expense->is_paid}}</x-common.table.cell>
                    <x-common.table.cell>{{$expense->paid_on}}</x-common.table.cell>
                    <x-common.table.cell>{{$expense->paid_to}}</x-common.table.cell>
                    <x-common.table.cell>{{$expense->paid_by}}</x-common.table.cell>
                    <x-common.table.cell>
                        <div class="flex space-x-2 items-center">
                            @can('expense_show')
                                <a href="{{route('admin.queries.show',$expense->id)}}">
                                    <x-icons.eye class="w-6 h-6  text-cyan-700"/>
                                </a>
                            @endcan

                            @can('expense_edit')
                                <a href="#" wire:click.prevent="edit({{$expense->id}})">
                                    <x-icons.edit class="w-5 h-5  text-blue-700"/>
                                </a>
                            @endcan

                            @can('expense_delete')
                                <a href="#" wire:click.prevent="deleteQuery({{$expense->id}})">
                                    <x-icons.trash class="w-5 h-5  text-red-700"/>
                                </a>
                            @endcan
                        </div>
                    </x-common.table.cell>
                </x-common.table.row>
            @empty
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    <x-common.table.cell colspan="8">
                        <div class="py-10 flex justify-center items-center text-gray-300 text-xl">
                            No Expense Found...
                        </div>
                    </x-common.table.cell>
                </x-common.table.row>
            @endforelse
        </x-slot>
    </x-common.table>
    <div>
        {{$expenses->links()}}
    </div>
</div>
