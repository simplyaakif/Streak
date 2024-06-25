@extends('layouts.admin')
@section('content')
<div class="row ">
    <div class="card p-4 bg-white">
        <div class="card-header border-b border-blueGray-200">
            <div class="card-header-container flex justify-between items-center mb-4">
                <h6 class="card-title text-lg leading-6 font-medium text-gray-900">
                    {{ trans('cruds.course.title_singular') }}
                    {{ trans('global.list') }}
                </h6>

                @can('course_create')
                    <a class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500" href="{{ route('admin.courses.create') }}">
                        {{ trans('global.add') }} {{ trans('cruds.course.title_singular') }}
                    </a>
                @endcan
            </div>
        </div>
        @livewire('course.index')

    </div>
</div>
@endsection
