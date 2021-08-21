@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="card bg-blueGray-100">
        <div class="card-header">
            <div class="card-header-container">
                <h6 class="card-title">
                    {{ trans('global.view') }}
                    {{ trans('cruds.student.title_singular') }}:
                    {{ trans('cruds.student.fields.id') }}
                    {{ $student->id }}
                </h6>
            </div>
        </div>

        <div class="card-body">
            <div class="pt-3">
                <table class="table table-view">
                    <tbody class="bg-white">
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.id') }}
                            </th>
                            <td>
                                {{ $student->id }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.dp') }}
                            </th>
                            <td>
                                @foreach($student->dp as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.name') }}
                            </th>
                            <td>
                                {{ $student->name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.user') }}
                            </th>
                            <td>
                                @if($student->user)
                                    <span class="badge badge-relationship">{{ $student->user->name ?? '' }}</span>
                                @endif
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.father_name') }}
                            </th>
                            <td>
                                {{ $student->father_name }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.gender') }}
                            </th>
                            <td>
                                {{ $student->gender_label }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.nationality') }}
                            </th>
                            <td>
                                {{ $student->nationality }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.date_of_birth') }}
                            </th>
                            <td>
                                {{ $student->date_of_birth }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.cnic_passport') }}
                            </th>
                            <td>
                                {{ $student->cnic_passport }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.mobile') }}
                            </th>
                            <td>
                                {{ $student->mobile }}
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.email') }}
                            </th>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $student->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $student->email }}
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <th>
                                {{ trans('cruds.student.fields.documents') }}
                            </th>
                            <td>
                                @foreach($student->documents as $key => $entry)
                                    <a class="link-light-blue" href="{{ $entry['url'] }}">
                                        <i class="far fa-file">
                                        </i>
                                        {{ $entry['file_name'] }}
                                    </a>
                                @endforeach
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="form-group">
                @can('student_edit')
                    <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-indigo mr-2">
                        {{ trans('global.edit') }}
                    </a>
                @endcan
                <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">
                    {{ trans('global.back') }}
                </a>
            </div>
        </div>
    </div>
</div>
@endsection