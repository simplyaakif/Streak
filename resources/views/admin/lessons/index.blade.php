@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Lesson Planner"/>
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.filament.lesson.index/>
    </x-common.page-body>
@endsection
