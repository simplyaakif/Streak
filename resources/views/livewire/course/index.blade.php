<div class="p-4">
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model.live="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('course_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Course" format="csv" />
                <livewire:excel-export model="Course" format="xlsx" />
                <livewire:excel-export model="Course" format="pdf" />
            @endif




        </div>
        <div class="w-full sm:w-1/2 sm:text-right">
            Search:
            <input type="text" wire:model.live.debounce.300ms="search" class="w-full sm:w-1/3 inline-block" />
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
                            {{ trans('cruds.course.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.featured_image') }}
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.title') }}
                            @include('components.table.sort', ['field' => 'title'])
                        </th>
                        <th>
                            {{ trans('cruds.course.fields.description') }}
                            @include('components.table.sort', ['field' => 'description'])
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($courses as $course)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $course->id }}" wire:model.live="selected">
                            </td>
                            <td>
                                {{ $course->id }}
                            </td>
                            <td>
                                @foreach($course->featured_image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $course->title }}
                            </td>
                            <td>
                                {{ $course->description }}
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('course_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.courses.show', $course) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('course_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.courses.edit', $course) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('course_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $course->id }})" wire:loading.attr="disabled">
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
            {{ $courses->links() }}
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
