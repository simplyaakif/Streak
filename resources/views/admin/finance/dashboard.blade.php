@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Finance Status" subtitle="Finance Reports of the month"/>
    </x-common.page-header>
    <x-common.layout-subpage>
        <div>
            <form action="{{route('admin.finance.dashboard')}}"  class="flex gap-2">
                <x-common.data-input-text label="Date" type="date" name="date" value="{{$date}}" />
                <x-button.primary type="submit">Submit</x-button.primary>
            </form>
        </div>
        <div class="grid md:grid-cols-4 gap-4 my-10">
            @forelse($accounts as $key=>$account)
                <x-common.stat-card
                    can="recovery_show"
                    sublabel="In {{now()->monthName}}"
                    :label="$account['bank']" :stat="$account['total']">
                    <x-slot name="icon">
                        <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                    </x-slot>
                </x-common.stat-card>
            @empty
            @endforelse
        </div>
        <div class="my-8">
            <x-common.table>
                <x-slot name="head">
                <x-common.table.heading>Batch</x-common.table.heading>
                <x-common.table.heading>Number Of Recoveries Received</x-common.table.heading>
                <x-common.table.heading>Total Contribution of Batch</x-common.table.heading>
                </x-slot>
                <x-slot name="body">
                    @forelse($batchFinanceStatus as $key=>$row)
                        <x-common.table.row>
                            <x-common.table.cell>{{$row['title']}}</x-common.table.cell>
                            <x-common.table.cell>{{$row['count']}}</x-common.table.cell>
                            <x-common.table.cell>{{$row['total']}} Rs</x-common.table.cell>
                        </x-common.table.row>
                    @empty
                    @endforelse
                        <x-common.table.row>
                            <x-common.table.cell>Total Recoveries + Amount</x-common.table.cell>
                            <x-common.table.cell>{{$batchFinanceStatus->sum('count')}}</x-common.table.cell>
                            <x-common.table.cell>{{$batchFinanceStatus->sum('total')}} Rs</x-common.table.cell>
                        </x-common.table.row>
                </x-slot>
            </x-common.table>
        </div>
    </x-common.layout-subpage>
@endsection
