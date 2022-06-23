@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Finance Status" subtitle="Finance Reports of the month"/>
    </x-common.page-header>
    <x-common.layout-subpage>
        <div class="grid md:grid-cols-4 gap-4 mb-10">
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
    </x-common.layout-subpage>
@endsection
