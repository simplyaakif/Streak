@extends('layouts.admin')
@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Create Admission" subtitle="Enter details for a new Student"/>
    </x-common.page-header>
    <x-common.page-body>
        @livewire('student.create')
    </x-common.page-body>
@endsection
