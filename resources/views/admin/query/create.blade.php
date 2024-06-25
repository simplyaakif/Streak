@extends('layouts.admin')
@section('content')
<div class="row">
    <x-common.page-header>
        <x-common.ph-section-header title="Create Query" subtitle="Create a new query in system"/>
    </x-common.page-header>
    <x-common.page-body>
            @livewire('query.create')
    </x-common.page-body>
</div>
@endsection
