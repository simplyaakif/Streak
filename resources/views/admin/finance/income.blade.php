@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Income Section"/>
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.finance.income.index/>
    </x-common.page-body>
@endsection
