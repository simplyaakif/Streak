@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Home Tasks"/>
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.filament.home-task.index/>
    </x-common.page-body>
@endsection
