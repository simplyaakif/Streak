@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Vendors"/>
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.finance.vendor.index/>
    </x-common.page-body>
@endsection
