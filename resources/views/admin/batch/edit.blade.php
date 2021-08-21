@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.edit') }}
                    {{ trans('cruds.batch.title_singular') }}:
                    {{ trans('cruds.batch.fields.id') }}
                    {{ $batch->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            @livewire('batch.edit', [$batch])
        </div>
    </div>
</div>
@endsection