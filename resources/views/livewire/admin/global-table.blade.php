<div>
    {{--    Filters --}}
    <div class="mb-4 flex justify-between items-center">
        @if($searchColumn)
            <div class="w-1/4">
                <x-common.data-input-text
                    placeholder="Search in {{ucfirst($searchColumn)}}"
                    wire:model="filters.search"/>
            </div>
            <div class="flex space-x-2">
                <x-icons.refresh-right-square wire:click="resetFilters" bold class="w-8 h-8 text-cyan-600"/>
                <x-icons.filter  wire:click="resetFilters" bold  class="w-8 h-8 text-cyan-600"/>
            </div>
        @endif
    </div>
    <div class="grid grid-cols-3 gap-2 mb-4">
        <div>

        <x-common.filter-select  label="Select Filter">
            <x-select-list id="course" class="w-full shadow-inner  rounded border-gray-200 text-sm"  :options="['1'=>'Spoken English','2'=>'Fluency English']"
                           wire:model="filters.course" />
        </x-common.filter-select>
        </div>
        <div>

        <x-common.filter-date-interval label="Date Filter"/>
        </div>
    </div>
    {{--    Table--}}
    <x-common.table>
        <x-slot name="head">
            @foreach($columns as $column => $label)
                <x-common.table.heading sortable>
                    {{$label}}
                </x-common.table.heading>
            @endforeach
            @if($actions != null)
                <x-common.table.heading>
                    Actions
                </x-common.table.heading>
            @endif
        </x-slot>
        <x-slot name="body">
            @forelse($models as $model)
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    @foreach($columns as $column => $label)
                        <x-common.table.cell>{{$model->$column}}</x-common.table.cell>
                    @endforeach
                    @if($actions != null)
                        <x-common.table.cell>
                            <div class="flex space-x-2 items-center">
                                @if(in_array('show',$actions))
                                    <a href="#" wire:click.prevent="showQuery({{$model->id}})">
                                        <x-icons.eye class="w-6 h-6  text-cyan-700"/>
                                    </a>
                                @endif

                                @if(in_array('edit',$actions))
                                    <a href="#" wire:click.prevent="showQuery({{$model->id}})">
                                        <x-icons.edit class="w-5 h-5  text-blue-700"/>
                                    </a>
                                @endif

                                @if(in_array('delete',$actions))
                                    <a href="#" wire:click.prevent="modelDelete({{$model->id}})">
                                        <x-icons.trash class="w-5 h-5  text-red-700"/>
                                    </a>
                                @endif
                            </div>
                        </x-common.table.cell>
                    @endif
                </x-common.table.row>
            @empty
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    <x-common.table.cell colspan="{{count($columns)+1}}">
                        <div class="py-8 flex justify-center items-center text-gray-300 text-lg">
                            <div class="flex flex-col justify-center items-center">
                                <x-icons.warning class="w-12 h-12 mb-2"/>
                                No Data Found...
                            </div>
                        </div>
                    </x-common.table.cell>
                </x-common.table.row>
            @endforelse
        </x-slot>
    </x-common.table>

    <div>
        {{$models->links()}}
    </div>
</div>
