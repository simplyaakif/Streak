@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Useful Links"/>
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.filament.useful-links.useful-links-index/>
    </x-common.page-body>
@endsection
