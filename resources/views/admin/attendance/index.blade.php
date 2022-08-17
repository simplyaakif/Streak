@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Attendance" subtitle="All Batch Attendance Records"/>
    </x-common.page-header>

    <x-common.page-body>
        <livewire:admin.filament.student-attendance.index/>
    </x-common.page-body>
@endsection
