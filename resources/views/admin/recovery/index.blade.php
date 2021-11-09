@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Recoveries Received" subtitle="Admission installments received." />
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.finance.received-table/>
    </x-common.page-body>
@endsection
