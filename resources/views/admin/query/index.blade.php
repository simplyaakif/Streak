@extends('layouts.admin')
@section('content')
<div class="row">
{{--    <x-common.page-header>--}}
{{--        <x-common.ph-section-header title="Query Search" subtitle="All the queries in the system"/>--}}
{{--                @can('query_create')--}}
{{--                    <a class="btn btn-indigo" href="{{ route('admin.queries.create') }}">--}}
{{--                        {{ trans('global.add') }} {{ trans('cruds.query.title_singular') }}--}}
{{--                    </a>--}}
{{--                @endcan--}}
{{--    </x-common.page-header>--}}

    <x-common.page-body>
        <livewire:query-table/>
    </x-common.page-body>

</div>
@endsection
