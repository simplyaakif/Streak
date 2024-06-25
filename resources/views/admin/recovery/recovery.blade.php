@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Upcoming Receivings" subtitle="Admission installments to be received." />
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.finance.recovery-table/>
    </x-common.page-body>
@endsection
