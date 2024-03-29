@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-white px-8 py-4">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.course.title_singular') }}:
                    {{ trans('cruds.course.fields.id') }}
                    {{ $course->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('course.edit', [$course])
        </div>
    </div>
</div>
@endsection
