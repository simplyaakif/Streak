<div>
    {{--    Modal--}}
    <form wire:submit="delete">
        <x-modal.confirmation wire:model="showDeleteModal">
            <x-slot name="title">Delete Transaction</x-slot>

            <x-slot name="content">
                <div class="py-8 text-slate-700">Are you sure you? This action is irreversible.</div>
            </x-slot>

            <x-slot name="footer">
                <x-button.secondary wire:click="showDeleteModal = false">Cancel</x-button.secondary>
                <x-button.primary type="submit">Delete</x-button.primary>
            </x-slot>
        </x-modal.confirmation>
    </form>
    <form wire:submit="save">
        <x-modal.dialog wire:model.live="showEditModal">
            <x-slot name="title">Transaction</x-slot>
            <x-slot name="content">

                <div>
                    <label for="">Type</label>
                    <x-common.data-input-select
                        label="type" error="editing.type"
                        wire:model.live="editing.type">
                        <option value="" disabled> -- Select One --</option>
                        @foreach(App\Models\Income::Types as $id => $label)
                            <option value="{{$id}}">{{$label}}</option>
                        @endforeach
                    </x-common.data-input-select>
                </div>

                <div>
                    <label for="">Amount</label>
                    <x-common.data-input-text wire:model.blur="editing.amount" label="amount" error="editing.amount"/>
                </div>
                <div>
                    <label for="">Account</label>
                    <x-common.data-input-select
                        label="type" error="account_id"
                        wire:model.live="account_id">
                        <option value="" disabled> -- Select One --</option>
                        @foreach($accounts as $account)
                            <option value="{{$account->id}}">{{$account->title}}</option>
                        @endforeach
                    </x-common.data-input-select>
                </div>

                <div>
                    <label for="">Paid By</label>
                    <x-common.data-input-text wire:model.blur="editing.paid_by" label="amount" error="editing.paid_by"/>
                </div>
                <div>
                    <label for="">Received By</label>
                    <x-common.data-input-select
                        label="type" error="editing.user_id"
                        wire:model.live="editing.user_id">
                        <option value="" disabled> -- Select One --</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </x-common.data-input-select>
                </div>

                {{--                <div>--}}
                {{--                    <label for="">Received On</label>--}}
                {{--                    <x-date-picker id="paid_on" name="paid_on"--}}
                {{--                                   wire:model.live="" label="amount"--}}
                {{--                                   error="editing--}}
                {{--                    .paid_on"/>--}}
                {{--                </div>--}}
                <div>
                    <label for="">Remarks/Comments</label>
                    <x-common.data-input-text wire:model.blur="editing.remarks" label="amount"
                                              error="editing.remarks"/>
                </div>
            </x-slot>
            <x-slot name="footer">
                <x-button.secondary wire:click="showEditModal = false">Cancel</x-button.secondary>
                <x-button.primary type="submit">Save</x-button.primary>
            </x-slot>
        </x-modal.dialog>
    </form>
    {{--Filters--}}
    {{--    Table--}}
    <x-button.primary wire:click="create">
        <div class="flex items-center space-x-2">
        <x-icons.add class="w-5 h-5 text-white"/>
        Create
        </div>
    </x-button.primary>
    <x-common.table>
        <x-slot name="head">
            <x-common.table.heading>#</x-common.table.heading>
            <x-common.table.heading>Type</x-common.table.heading>
            <x-common.table.heading>Amount</x-common.table.heading>
            <x-common.table.heading>Paying Account</x-common.table.heading>
            <x-common.table.heading>Received by On</x-common.table.heading>
            <x-common.table.heading>Actions</x-common.table.heading>
        </x-slot>

        <x-slot name="body">
            @forelse($incomes as $income)
                <x-common.table.row>
                    <x-common.table.cell>{{$incomes->firstItem() + $loop->index}}</x-common.table.cell>
                    <x-common.table.cell>{{$income->income_type}}</x-common.table.cell>
                    <x-common.table.cell>{{$income->amount}} Rs</x-common.table.cell>
                    <x-common.table.cell>{{$income->account}}</x-common.table.cell>
                    <x-common.table.cell>
                        <div class="flex flex-col">
                        <span>
                            {{$income->user->name}}
                        </span>
                            <span class="text-xs">
                        {{$income->paid_date}}
                        </span>
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell>
                        <div class="flex space-x-2 items-center">
                            @can('income_show')
                                <a href="#">
                                    <x-icons.eye class="w-6 h-6  text-cyan-700"/>
                                </a>
                            @endcan

                            @can('income_edit')
                                <a href="#" wire:click.prevent="edit({{$income->id}})">
                                    <x-icons.edit class="w-5 h-5  text-blue-700"/>
                                </a>
                            @endcan

                            @can('income_delete')
                                <a href="#"
                                   wire:click.prevent="confirmDelete({{$income->id}})">
                                    <x-icons.trash class="w-5 h-5  text-red-700"/>
                                </a>
                            @endcan
                        </div>
                    </x-common.table.cell>
                </x-common.table.row>
            @empty
                <x-common.table.row>
                    <x-common.table.cell colspan="6">No Income found</x-common.table.cell>
                </x-common.table.row>
            @endforelse
        </x-slot>
    </x-common.table>
    {{$incomes->links()}}
</div>
