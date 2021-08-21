@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.query.title_singular') }}:
                    {{ trans('cruds.query.fields.id') }}
                    {{ $query->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.query.fields.id') }}
                            </th>
                            <td>
                                {{ $query->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.query.fields.dp') }}
                            </th>
                            <td>
                                @foreach($query->dp as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.query.fields.name') }}
                            </th>
                            <td>
                                {{ $query->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.query.fields.mobile') }}
                            </th>
                            <td>
                                {{ $query->mobile }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.query.fields.email') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $query->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $query->email }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.query.fields.address') }}
                            </th>
                            <td>
                                {{ $query->address }}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('query_edit')
                    <a href="{{ route('admin.queries.edit', $query) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.queries.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection