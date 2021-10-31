@extends('layouts.admin')
@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Expenses" subtitle="Expenses records"/>
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.finance.expense.index/>
    </x-common.page-body>
@endsection
