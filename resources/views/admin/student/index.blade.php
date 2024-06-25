@extends('layouts.admin')
@section('content')
<div class="row">
    <x-common.page-header>
        <x-common.ph-section-header title="Students List" subtitle="All the active students list"/>
        @can('student_create')
            <a class="btn btn-indigo" href="{{ route('admin.students.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.student.title_singular') }}
            </a>
        @endcan
    </x-common.page-header>


    <x-common.page-body>
        @livewire('admin.student.student-table')
{{--        @livewire('student.index')--}}
    </x-common.page-body>
</div>
@endsection
