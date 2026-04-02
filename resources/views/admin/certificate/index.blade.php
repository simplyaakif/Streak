@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Alumni" subtitle="Generate certificate for the alumni"/>
    </x-common.page-header>
    <x-common.page-body>
        <livewire:admin.certificate.certificates-table />
    </x-common.page-body>
@endsection
