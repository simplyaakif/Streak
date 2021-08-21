@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.batch.title_singular') }}:
                    {{ trans('cruds.batch.fields.id') }}
                    {{ $batch->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.batch.fields.id') }}
                            </th>
                            <td>
                                {{ $batch->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.batch.fields.title') }}
                            </th>
                            <td>
                                {{ $batch->title }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.batch.fields.limit') }}
                            </th>
                            <td>
                                {{ $batch->limit }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.batch.fields.course') }}
                            </th>
                            <td>
                                @if($batch->course)
                                    <span class="badge badge-relationship">{{ $batch->course->title ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.batch.fields.batch_content') }}
                            </th>
                            <td>
                                @foreach($batch->batch_content as $key => $entry)
                                    <a class="link-light-blue" href="{{ $entry['url'] }}">
                                        <i class="far fa-file">
                                        </i>
                                        {{ $entry['file_name'] }}
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.batch.fields.time') }}
                            </th>
                            <td>
                                {{ $batch->time }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.batch.fields.description') }}
                            </th>
                            <td>
                                {{ $batch->description }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.batch.fields.featured_image') }}
                            </th>
                            <td>
                                @foreach($batch->featured_image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('batch_edit')
                    <a href="{{ route('admin.batches.edit', $batch) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.batches.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection