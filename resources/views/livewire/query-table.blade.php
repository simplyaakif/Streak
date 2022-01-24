<div x-data="{ open: @entangle('showQuery') }" class="align-middle min-w-full overflow-x-auto space-y-4 overflow-hidden
sm:rounded-lg">

    <x-modal.dialog wire:model="showEditModal">
        <x-slot name="title">Edit Query</x-slot>
        <x-slot name="content">
            <div>
                {{--                <x-common.form-header title="Personal Information"/>--}}
                <div class="grid grid-cols-2 gap-1">
                    <x-shared.form.input-wrapper label="Name">
                        <x-common.data-input-text
                            error="editing.name"
                            placeholder="Enter Query Name"
                            wire:model.lazy="editing.name"/>
                    </x-shared.form.input-wrapper>
                    <x-shared.form.input-wrapper
                        label="Mobile Number">
                        <x-common.data-input-text
                            error="editing.mobile"
                            placeholder="Enter Mobile Number 03335335792"
                            wire:model.lazy="editing.mobile"/>
                    </x-shared.form.input-wrapper>
                    <x-shared.form.input-wrapper label="Email">
                        <x-common.data-input-text error="editing.email" type="email"
                                                  wire:model.lazy="editing.email" placeholder="Enter Email Address"/>
                    </x-shared.form.input-wrapper>
                    <x-shared.form.input-wrapper label="Mobile Number">
                        <x-common.data-input-text
                            error="editing.mobile"
                            placeholder="Enter Mobile Number 03335335792"
                            wire:model.lazy="editing.mobile"/>
                    </x-shared.form.input-wrapper>

                </div>
                {{--                <x-common.form-header title="Course Information"/>--}}
                {{--                <x-common.form-header title="Status Information"/>--}}

            </div>
        </x-slot>
        <x-slot name="footer">
            <x-button.secondary wire:click="$toggle('showEditModal')">Cancel</x-button.secondary>
            <x-button.primary>Save</x-button.primary>
        </x-slot>
    </x-modal.dialog>

    <div class="grid grid-cols-3 gap-2">
        <x-common.filter-wrapper label="Search by Name">
            <x-common.data-input-text wire:model="filters.search" placeholder="Search Query by Name"/>
        </x-common.filter-wrapper>
        <div>

            <x-common.filter-select label="Select Course">
                <x-common.data-input-select wire:model="filters.course">
                    <option value="">All</option>
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->title}}</option>
                    @endforeach
                </x-common.data-input-select>
            </x-common.filter-select>
        </div>
        <div>
            <x-common.filter-wrapper label="Created Between">
                <div class="mb-2">
                    <div class="mb-2 flex space-x-1">
                        <x-common.data-input-text wire:model="filters.date_min" type="date"
                                                  placeholder="Search Query by Name"/>
                        <x-common.data-input-text wire:model="filters.date_max" type="date"
                                                  placeholder="Search Query by Name"/>
                    </div>
                </div>
            </x-common.filter-wrapper>
        </div>

    </div>

    <x-common.table class="max-w-full">
        <x-slot name="head">
            <x-common.table.heading>
                #
            </x-common.table.heading>
            <x-common.table.heading sortable wire:click="sortBy('name')"
                                    :direction="$sortDirection  === 'name' ?
                                    $sortDirection:null">Query Name
            </x-common.table.heading>
            <x-common.table.heading> Course</x-common.table.heading>
            <x-common.table.heading>Entry By</x-common.table.heading>
            <x-common.table.heading>Recent Status</x-common.table.heading>
            <x-common.table.heading sortable wire:click="sortBy('created_at')"
                                    :direction="$sortDirection  === 'created_at' ?
                                    $sortDirection:null">Entry Date
            </x-common.table.heading>
            <x-common.table.heading> Actions</x-common.table.heading>
        </x-slot>
        <x-slot name="body">
            @forelse($queries as $query)
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    <x-common.table.cell class="w-2">
                        {{$queries->firstItem() + $loop->iteration - 1}}
                    </x-common.table.cell>
                    <x-common.table.cell class="">
                        <div class="flex space-x-2 items-center">
                            <div class="w-12">
                                <img class="h-10 w-10 rounded-full" src="{{$query->avatarUrl()}}" alt="">
                            </div>
                            <div>
                                <div>
                                    {{$query->name}}
                                    <div class="text-xs text-gray-500">{{$query->mobile}}</div>
                                    <div class="text-xs text-gray-500">{{$query->email}}</div>
                                </div>
                            </div>
                        </div>

                    </x-common.table.cell>
                    <x-common.table.cell class=" overflow-hidden">
                        <div class="flex text-center space-x-2">
                            @foreach($query->courses as $course)
                                <div class="bg-gray-100 px-2 py-1 rounded-lg">

                                <div class=" text-center  text-xs w-20">
                                    {{$course->title}}
                                </div>
                                </div>
                            @endforeach
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell>
                        <span class="text-sm">

                        {{$query->entry_by}}
                        </span>
                    </x-common.table.cell>
                    <x-common.table.cell>
                        <div class="flex flex-col text-center space-y-1">
                            <span class="bg-gray-50 text-xs rounded-full">
                        {{$query->recent_timeline_title }}
                            </span>
                            <span class="text-red-600 text-xs font-bold">
                                {{$query->recent_timeline_date }}
                            </span>
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell><span class="text-xs">{{$query->human_date}}</span></x-common.table.cell>
                    <x-common.table.cell>
                        <div class="flex space-x-2 items-center">
                            @can('query_show')
                                <a href="#" wire:click.prevent="showQuery({{$query->id}})">
                                    <x-icons.eye class="w-6 h-6  text-cyan-700"/>
                                </a>
                                <a href="{{route('admin.queries.show',$query->id)}}">
                                    <x-icons.export-square class="w-5 h-5  text-orange-700"/>
                                </a>
                            @endcan
                            @can('query_edit')
                                <a href="#" wire:click.prevent="edit({{$query->id}})">
                                    <x-icons.edit class="w-5 h-5  text-blue-700"/>
                                </a>
                            @endcan
                            @can('query_delete')
                                <a href="#" wire:click.prevent="deleteQuery({{$query->id}})">
                                    <x-icons.trash class="w-5 h-5  text-red-700"/>
                                </a>
                            @endcan
                        </div>
                    </x-common.table.cell>
                </x-common.table.row>
            @empty
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    <x-common.table.cell colspan="8">
                        <div class="py-10 flex justify-center items-center text-gray-300 text-xl">
                            No Query Found...
                        </div>
                    </x-common.table.cell>
                </x-common.table.row>
            @endforelse
        </x-slot>
    </x-common.table>
    <div>
        {{$queries->links()}}
    </div>

    <div>
        {{--        @if($showQuery)--}}
        <div @keydown.window.escape="open = false"
             x-show="open" class="fixed inset-0 overflow-hidden z-10" x-ref="dialog" aria-modal="true">
            <div class="absolute inset-0 overflow-hidden">
                <div x-description="Background overlay, show/hide based on slide-over state." class="absolute
                bg-gray-900 bg-opacity-25 inset-0" aria-hidden="true">

                    <div class="fixed inset-y-0 right-0 pl-10 max-w-full flex sm:pl-16">

                        <div x-show="open"
                             x-transition:enter="transform transition ease-in-out duration-500 sm:duration-700"
                             x-transition:enter-start="translate-x-full" x-transition:enter-end="translate-x-0"
                             x-transition:leave="transform transition ease-in-out duration-500 sm:duration-700"
                             x-transition:leave-start="translate-x-0" x-transition:leave-end="translate-x-full"
                             class="w-screen max-w-md"
                             x-description="Slide-over panel, show/hide based on slide-over state.">
                            <div class="h-full flex flex-col bg-white shadow-xl overflow-y-scroll">
                                <div class="px-4 py-6 sm:px-6 bg-cyan-700">
                                    <div class="flex items-start justify-between">
                                        <h2 id="slide-over-heading" class="text-lg font-medium text-white">
                                            Profile
                                        </h2>
                                        <div class="ml-3 h-7 flex items-center">
                                            <button type="button"
                                                    class="bg-white rounded-md text-gray-400 hover:text-gray-500 focus:ring-2 focus:ring-indigo-500"
                                                    @click="open = false">
                                                <span class="sr-only">Close panel</span>
                                                <svg class="h-6 w-6" x-description="Heroicon name: outline/x"
                                                     xmlns="http://www.w3.org/2000/svg" fill="none"
                                                     viewBox="0 0 24 24"
                                                     stroke="currentColor" aria-hidden="true">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                          stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                                </svg>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                                <!-- Main -->
                                <div>
                                    <div class="pb-1 sm:pb-3">
                                        <div>
                                            <div class="mt-6 px-4 sm:mt-4 sm:flex sm:items-end sm:px-6">
                                                <div class="sm:flex-1">
                                                    <div>
                                                        <div class="flex items-center">
                                                            <h3 class="font-bold text-xl text-gray-900 sm:text-2xl">
                                                                {{$showQueryDetails->name}}</h3>
                                                            <span
                                                                class="ml-2.5 bg-green-400 flex-shrink-0 inline-block h-2 w-2 rounded-full">
                                <span class="sr-only">Online</span>
                              </span>
                                                        </div>
                                                        <p class="text-sm
                                                            text-gray-500">{{$showQueryDetails->email}}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-4 pt-5 pb-5 sm:px-0 sm:pt-0">
                                        @if($showQueryDetails->courses->count() != 0 )
                                            <dl class=" px-4 sm:px-6  mb-6">
                                                <dt class="text-sm mb-4 font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">
                                                    Courses Applied in
                                                </dt>
                                                <div class="flex space-x-2">
                                                    @foreach($showQueryDetails->courses as $course)
                                                        <dd
                                                            class="text-sm text-gray-900 bg-gray-200 rounded-full py-1 px-2">
                                                            {{$course->title}}
                                                        </dd>
                                                    @endforeach
                                                </div>

                                            </dl>
                                        @endif
                                        <dl class=" px-4 grid grid-cols-2 gap-2  sm:px-6 ">
                                            <div>
                                                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">
                                                    Remarks
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                                    <p>
                                                        {{$showQueryDetails->remarks}}
                                                    </p>
                                                </dd>
                                            </div>

                                            <div>
                                                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">
                                                    Mobile
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                                    {{$showQueryDetails->mobile}}
                                                </dd>
                                            </div>
                                            <div>
                                                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">
                                                    Location
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                                    {{$showQueryDetails->address}}
                                                </dd>
                                            </div>
                                            <div>
                                                <dt class="text-sm font-medium text-gray-500 sm:w-40 sm:flex-shrink-0">
                                                    Entry Date
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                                    <time datetime="1988-06-23">
                                                        {{$showQueryDetails->human_date}}
                                                    </time>
                                                </dd>
                                            </div>
                                        </dl>
                                        <!-- This example requires Tailwind CSS v2.0+ -->
                                        <div class="bg-gray-50">

                                            <div class="py-4 border-b border-gray-200">
                                                <h3 class=" px-4  text-lg leading-6 font-medium text-gray-900">
                                                    Query Statuses
                                                </h3>
                                            </div>

                                            <div class="px-4 py-2 text-xs">
                                                <div class="bg-white py-2 px-2">
                                                    <table>
                                                        <thead>
                                                        <tr>
                                                            <th>Status </th>
                                                            <th>Follow Up Date</th>
                                                            <th>Remarks</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="divide-y">
                                                        @forelse($showQueryDetails->timelines as $timeline)
                                                        <tr>
                                                            <td class="px-2">
                                                                {{$timeline->title}}
                                                            </td>
                                                            <td class="px-2">
                                                                {{$timeline->pivot->fw_date_time}}
                                                            </td>
                                                            <td class="px-2">
                                                                {{$timeline->pivot->remarks}}
                                                            </td>
                                                        </tr>
                                                        @empty
                                                        @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="mt-4">
                                                    <form wire:submit.prevent="addTimeline">

                                                    <div class="grid grid-cols-2 gap-2">
                                                        <div>
                                                            <label for="">Status </label>
                                                            <x-common.data-input-select
                                                                error="addTimelineData.timeline_id"
                                                                wire:model.defer="addTimelineData.timeline_id">
                                                                @foreach($timelines as $timeline)
                                                                    <option
                                                                        value="{{$timeline->id}}">{{$timeline->title}}</option>
                                                                @endforeach
                                                            </x-common.data-input-select>
                                                        </div>
                                                        <div>
                                                            <label for="">Follow Up date </label>
                                                            <x-common.data-input-text label="Follow Up Date"
                                                                                      error="addTimelineData.fw_date_time"
                                                          wire:model.defer="addTimelineData.fw_date_time"
                                                                                      type="datetime-local"/>
                                                        </div>
                                                    </div>
                                                    <div>
                                                        <label for="">Remarks</label>
                                                        <x-common.data-input-text
                                                            error="addTimelineData.remarks"
                                                            wire:model.defer="addTimelineData.remarks"/>
                                                    </div>
                                                    <div>
                                                        <x-button.primary type="submit">Add Status</x-button.primary>
                                                    </div>
                                                    </form>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        {{--        @endif--}}
    </div>
</div>
