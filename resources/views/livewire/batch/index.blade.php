<div>
    <div class="card-controls sm:flex">
        <div class="w-full sm:w-1/2">
            Per page:
            <select wire:model="perPage" class="form-select w-full sm:w-1/6">
                @foreach($paginationOptions as $value)
                    <option value="{{ $value }}">{{ $value }}</option>
                @endforeach
            </select>

            @can('batch_delete')
                <button class="btn btn-rose ml-3 disabled:opacity-50 disabled:cursor-not-allowed" type="button" wire:click="confirm('deleteSelected')" wire:loading.attr="disabled" {{ $this->selectedCount ? '' : 'disabled' }}>
                    {{ __('Delete Selected') }}
                </button>
            @endcan

            @if(file_exists(app_path('Http/Livewire/ExcelExport.php')))
                <livewire:excel-export model="Batch" format="csv" />
                <livewire:excel-export model="Batch" format="xlsx" />
                <livewire:excel-export model="Batch" format="pdf" />
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
                            {{ trans('cruds.batch.fields.id') }}
                            @include('components.table.sort', ['field' => 'id'])
                        </th>
                        <th>
                            {{ trans('cruds.batch.fields.title') }}
                            @include('components.table.sort', ['field' => 'title'])
                        </th>
                        <th>
                            {{ trans('cruds.batch.fields.limit') }}
                            @include('components.table.sort', ['field' => 'limit'])
                        </th>
                        <th>
                            {{ trans('cruds.batch.fields.course') }}
                            @include('components.table.sort', ['field' => 'course.title'])
                        </th>
                        <th>
                            {{ trans('cruds.batch.fields.batch_content') }}
                        </th>
                        <th>
                            {{ trans('cruds.batch.fields.time') }}
                            @include('components.table.sort', ['field' => 'time'])
                        </th>
                        <th>
                            {{ trans('cruds.batch.fields.description') }}
                            @include('components.table.sort', ['field' => 'description'])
                        </th>
                        <th>
                            {{ trans('cruds.batch.fields.featured_image') }}
                        </th>
                        <th>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($batches as $batch)
                        <tr>
                            <td>
                                <input type="checkbox" value="{{ $batch->id }}" wire:model="selected">
                            </td>
                            <td>
                                {{ $batch->id }}
                            </td>
                            <td>
                                {{ $batch->title }}
                            </td>
                            <td>
                                {{ $batch->limit }}
                            </td>
                            <td>
                                @if($batch->course)
                                    <span class="badge badge-relationship">{{ $batch->course->title ?? '' }}</span>
                                @endif
                            </td>
                            <td>
                                @foreach($batch->batch_content as $key => $entry)
                                    <a class="link-light-blue" href="{{ $entry['url'] }}">
                                        <i class="far fa-file">
                                        </i>
                                        {{ $entry['file_name'] }}
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                {{ $batch->time }}
                            </td>
                            <td>
                                {{ $batch->description }}
                            </td>
                            <td>
                                @foreach($batch->featured_image as $key => $entry)
                                    <a class="link-photo" href="{{ $entry['url'] }}">
                                        <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">
                                    </a>
                                @endforeach
                            </td>
                            <td>
                                <div class="flex justify-end">
                                    @can('batch_show')
                                        <a class="btn btn-sm btn-info mr-2" href="{{ route('admin.batches.show', $batch) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan
                                    @can('batch_edit')
                                        <a class="btn btn-sm btn-success mr-2" href="{{ route('admin.batches.edit', $batch) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan
                                    @can('batch_delete')
                                        <button class="btn btn-sm btn-rose mr-2" type="button" wire:click="confirm('delete', {{ $batch->id }})" wire:loading.attr="disabled">
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
            {{ $batches->links() }}
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