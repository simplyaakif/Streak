<div class="space-y-4">
    <div class="grid grid-cols-3 gap-2">
        <x-common.filter-wrapper label="Search by Name">
            <x-common.data-input-text wire:model.live="filters.search" placeholder="Search Query by Name"/>
        </x-common.filter-wrapper>
        <div>

            <x-common.filter-select label="Select Batch">
                <x-common.data-input-select wire:model.live="filters.batch">
                    <option value="">All</option>
                    @foreach($batches as $batch)
                        <option value="{{$batch->id}}">{{$batch->title}}</option>
                    @endforeach
                </x-common.data-input-select>
            </x-common.filter-select>
        </div>
        <div>
            <x-common.filter-wrapper label="Created Between">
                <div class="mb-2">
                    <div class="mb-2 flex space-x-1">
                        <x-common.data-input-text wire:model.live="filters.date_min" type="date"
                                                  placeholder="Search Student by Name"/>
                        <x-common.data-input-text wire:model.live="filters.date_max" type="date"
                                                  placeholder="Search Student by Name"/>
                    </div>
                </div>
            </x-common.filter-wrapper>
        </div>

    </div>
    <div class="container">

    <x-common.table class="max-w-full ">
        <x-slot name="head">
            <x-common.table.heading>
                #
            </x-common.table.heading>
            <x-common.table.heading>
                D.P
            </x-common.table.heading>
            <x-common.table.heading sortable wire:click="sortBy('name')"
                                    :direction="$sortDirection  === 'name' ?
                                    $sortDirection:null">Student
            </x-common.table.heading>
            <x-common.table.heading>Gender</x-common.table.heading>
            <x-common.table.heading>Batch</x-common.table.heading>
            <x-common.table.heading>Status</x-common.table.heading>
            <x-common.table.heading>Session Dates</x-common.table.heading>
            <x-common.table.heading>Admitted On</x-common.table.heading>
            <x-common.table.heading> Actions</x-common.table.heading>
        </x-slot>
        <x-slot name="body">
            @forelse($students as $student)
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    <x-common.table.cell class="w-2">
                        {{$students->firstItem() + $loop->iteration - 1}}
                    </x-common.table.cell>
                    <x-common.table.cell class="w-2">
                        <div class="w-12 rounded-full">
                            @php $admission = App\Models\Student::findOrFail($student->student_id)@endphp
                            @forelse($admission->dp as $key => $entry)
                                <a  href="{{ $entry['url'] }}">
                                    <img class="h-10 w-10 rounded-full"
                                         src="{{ $entry['url'] }}" alt="{{ $entry['name']
                                     }}"
                                         title="{{ $entry['name'] }}">
                                </a>
                            @empty
                                <img class="h-10 w-10 rounded-full" src="{{$admission->avatarUrl()}}" alt="">
                            @endforelse
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell class="">
                        <div class="flex space-x-2 items-center">

                            <div>
                                <div>
                                    {{$student->name}}
                                    <div class="text-xs text-gray-500">{{$student->mobile}}</div>
                                    <div class="text-xs text-gray-500 truncate">{{$student->email}}</div>
                                </div>
                            </div>
                        </div>

                    </x-common.table.cell>
                    <x-common.table.cell>
                        <div class="capitalize">
                            {{$student->gender}}
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell class=" overflow-hidden">
                        <div class="flex flex-wrap text-center ">
                            <div class="bg-gray-100 m-1 px-2 py-1 rounded-lg">
                                <div class=" text-center  text-xs w-20">
                                    {{$student->batch_title}}
                                </div>
                            </div>
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell class="text-center">
                        <span class=" ">
                                {{App\Models\BatchStudent::STATUS[$student->batch_status]}}
                        </span>
                    </x-common.table.cell>
                    <x-common.table.cell class="text-sm justify-center items-center align-middle">
                        <div class="min-w-[100px]">
                            {{carbon($student->session_start_date)->format('d-M-Y')}}
                        </div>
                        <div class="min-w-[100px]">
                            {{carbon($student->session_end_date)->format('d-M-Y')}}
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell>
                        {{carbon($student->created_at)->diffForHumans()}}
                    </x-common.table.cell>
                    <x-common.table.cell>
                        <div class="flex space-x-2 items-center">
                            @can('student_show')
                                <a href="{{route('admin.students.show',$admission->id)}}">
                                    <x-icons.eye class="w-6 h-6  text-cyan-700"/>
                                </a>

                            @endcan
{{--                            @can('student_edit')--}}
{{--                                <a href="#">--}}
{{--                                    <x-icons.edit class="w-5 h-5  text-blue-700"/>--}}
{{--                                </a>--}}
{{--                            @endcan--}}
                            @can('student_delete')
                                <a href="#">
                                    <x-icons.trash class="w-5 h-5  text-red-700"/>
                                </a>
                            @endcan
                        </div>
                    </x-common.table.cell>
                </x-common.table.row>
            @empty
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    <x-common.table.cell colspan="9">
                        <div class="py-10 flex justify-center items-center text-gray-300 text-xl">
                            No Student Found...
                        </div>
                    </x-common.table.cell>
                </x-common.table.row>
            @endforelse
        </x-slot>
    </x-common.table>
    <div>
        {{$students->links()}}
    </div>
    </div>

</div>
