@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Employee" subtitle="Create or Edit"/>
    </x-common.page-header>

    <x-common.page-body>

    <livewire:admin.filament.employee.create-or-update :employee="$employee"/>
    </x-common.page-body>
@endsection
