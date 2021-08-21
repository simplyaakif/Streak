<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('student_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Student" format="csv" />
                <livewire:excel-export model="Student" format="xlsx" />
                <livewire:excel-export model="Student" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
        </div>
    </div>
    <div wire:loading.delay>
        Loading...
    </div>

    <div class="overflow-hidden">
        <div class="overflow-x-auto">
            <table class="table table-index w-full">
                <thead>
                    <tr>
                        <th class="w-9">
                        </th>
                        <th class="w-28">
                            {{ trans('cruds.student.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.dp') }}
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.name') }}
                            @include('components.table.sort', ['field' => 'name'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.user') }}
                            @include('components.table.sort', ['field' => 'user.name'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.father_name') }}
                            @include('components.table.sort', ['field' => 'father_name'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.gender') }}
                            @include('components.table.sort', ['field' => 'gender'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.nationality') }}
                            @include('components.table.sort', ['field' => 'nationality'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.date_of_birth') }}
                            @include('components.table.sort', ['field' => 'date_of_birth'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.cnic_passport') }}
                            @include('components.table.sort', ['field' => 'cnic_passport'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.mobile') }}
                            @include('components.table.sort', ['field' => 'mobile'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.email') }}
                            @include('components.table.sort', ['field' => 'email'])
                        </th>
                        <th>
                            {{ trans('cruds.student.fields.documents') }}
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($students as $student)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $student->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $student->id }}
                            </td>
                            <td>
                                @foreach($student->dp as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $student->name }}
                            </td>
                            <td>
                                @if($student->user)
                                    <span class="badge badge-relationship">{{ $student->user->name ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                {{ $student->father_name }}
                            </td>
                            <td>
                                {{ $student->gender_label }}
                            </td>
                            <td>
                                {{ $student->nationality }}
                            </td>
                            <td>
                                {{ $student->date_of_birth }}
                            </td>
                            <td>
                                {{ $student->cnic_passport }}
                            </td>
                            <td>
                                {{ $student->mobile }}
                            </td>
                            <td>
                                <a class="link-light-blue" href="mailto:{{ $student->email }}">
                                    <i class="far fa-envelope fa-fw">
                                    </i>
                                    {{ $student->email }}
                                </a>
                            </td>
                            <td>
                                @foreach($student->documents as $key => $entry)
                                    <a class="link-light-blue" href="{{ $entry['url'] }}">
                                        <i class="far fa-file">
                                        </i>
                                        {{ $entry['file_name'] }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('student_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.students.show', $student) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('student_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.students.edit', $student) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('student_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $student->id }})" wire:loading.attr="disabled">
                                            {{ trans('global.delete') }}
                                        </button>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="10">No entries found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    <div class="card-body">
        <div class="pt-3">
            @if($this->selectedCount)
                <p class="text-sm leading-5">
                    <span class="font-medium">
                        {{ $this->selectedCount }}
                    </span>
                    {{ __('Entries selected') }}
                </p>
            @endif
            {{ $students->links() }}
        </div>
    </div>
</div>

@push('scripts')
    <script>
        Livewire.on('confirm', e => {
    if (!confirm("{{ trans('global.areYouSure') }}")) {
        return
    }
@this[e.callback](...e.argv)
})
    </script>
@endpush