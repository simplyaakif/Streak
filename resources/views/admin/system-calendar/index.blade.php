@extends('layouts.admin')


@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Institute Calendar" subtitle="Institution Calendar showing holidays and
        events"/>
    </x-common.page-header>
    <x-common.page-body>
        <div class="relative container mx-auto">

        <livewire:admin.institute-calendar.index
            week-starts-at="1"
            before-calendar-view="admin/institute-calendar/before-calendar-view"
        />
        </div>
    </x-common.page-body>

@endsection

@push('scripts')
    @livewireCalendarScripts
@endpush
