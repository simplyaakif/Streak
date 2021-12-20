@extends('layouts.admin')
@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Employees" subtitle="Active & Non-active Employee of Organization"/>
    </x-common.page-header>

    <x-common.page-body>

        <livewire:admin.employees.index/>
{{--        <livewire:admin.global-table--}}
{{--            model="employee"--}}
{{--            :columns="[--}}
{{--                'name'=>'Employee Name',--}}
{{--                'mobile'=>'Mobile Number',--}}
{{--                'designation'=>'Designation'--}}
{{--            ]"--}}
{{--            search-column="name"--}}
{{--            :actions="['show','delete']"--}}
{{--        />--}}
    </x-common.page-body>
@endsection
