@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title text-3xl font-extrabold text-blue-gray-900">
                    {{ trans('global.create') }}
                    {{ trans('cruds.query.title_singular') }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('query.create')
        </div>
    </div>
</div>
@endsection
