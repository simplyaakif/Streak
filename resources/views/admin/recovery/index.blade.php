@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Recoveries Received" subtitle="Admission installments received." />
    </x-common.page-header>
    <x-common.page-body>
        <div class="m-2  grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
        <x-common.stat-card
            can="recovery_access"
            label="Due Today"
            sublabel="Recovery Amount Due Today"
            stat="{{$amount_due_today}}"
        >
            <x-slot name="icon">
                <x-icons.cash class="w-6 h-6 text-gray-400"/>
            </x-slot>
        </x-common.stat-card>
        <x-common.stat-card
            can="recovery_access"
            label="Due Month"
            sublabel="Amount Due this Month"
                            :stat="$amount_due_month"
        >
            <x-slot name="icon">
                <x-icons.cash class="w-6 h-6 text-gray-400"/>
            </x-slot>
        </x-common.stat-card>
        <x-common.stat-card
            can="recovery_show"
            label="Due Pending"
            sublabel="Amount Due till today"
                            :stat="$amount_due_pending"
        >
            <x-slot name="icon">
                <x-icons.cash class="w-6 h-6 text-gray-400"/>
            </x-slot>
        </x-common.stat-card>
        <x-common.stat-card
            can="recovery_show"
            label="Due Future"
            sublabel="Amount Due after this Month"
                            :stat="$amount_due_future"
        >
            <x-slot name="icon">
                <x-icons.cash class="w-6 h-6 text-gray-400"/>
            </x-slot>
        </x-common.stat-card>
        </div>
        <div class="mt-8">
        <livewire:admin.filament.recovery.recovery-index/>
        </div>
    </x-common.page-body>
@endsection
