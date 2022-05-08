<div>
    <x-common.table>
        <x-slot name="head">
            <x-common.table.heading>Sr. #</x-common.table.heading>
            <x-common.table.heading>Send To</x-common.table.heading>
            <x-common.table.heading>Category</x-common.table.heading>
            <x-common.table.heading>Type</x-common.table.heading>
            <x-common.table.heading>Message</x-common.table.heading>
        </x-slot>
        <x-slot name="body">
            @forelse($smses as $sms)
                <x-common.table.row>
                    <x-common.table.cell></x-common.table.cell>
                    <x-common.table.cell></x-common.table.cell>
                    <x-common.table.cell></x-common.table.cell>
                    <x-common.table.cell></x-common.table.cell>
                    <x-common.table.cell></x-common.table.cell>
                </x-common.table.row>
            @empty
                <x-common.table.row>
                    <x-common.table.cell colspan="5" class="text-center"> No data found</x-common.table.cell>
                </x-common.table.row>
            @endforelse
        </x-slot>
    </x-common.table>
</div>
