<div x-data="{ open: @entangle('showQuery') }" class="align-middle min-w-full overflow-x-auto space-y-4 overflow-hidden
sm:rounded-lg">
    <div class="space-x-2 flex">
        <div class="w-1/4 ">
            <x-common.data-input-text wire:model="filters.search" placeholder="Search Query by Name"/>
        </div>
        <button wire:click="$toggle('showFilters')">
            @if ($showFilters) Hide @endif
            Advanced Search ...
        </button>
    </div>

    <div>
        @if ($showFilters)
            <div class="bg-gray-300 p-4 rounded shadow-inner flex flex-col relative">
                <div class="flex w-full">
                    <div class="w-1/2 pr-2 space-y-4">
                        <x-common.input.group inline for="filter-status" label="Status">
                            <x-common.data-input-select wire:model="filters.course" id="filter-status">
                                <option value="" disabled>Select Course...</option>
                                @foreach($courses as $course)
                                    <option value="{{$course->id}}">{{$course->title}}</option>
                                @endforeach
                            </x-common.data-input-select>
                        </x-common.input.group>

                    </div>

                    <div class="w-1/2 space-x-2  flex">
                        <x-common.input.group inline for="filter-date-min" label="Minimum Date">
                            <x-common.data-input-text
                                wire:model="filters.date_min"
                                id="filter-date-min" placeholder="MM/DD/YYYY"/>
                        </x-common.input.group>

                        <x-common.input.group inline for="filter-date-max" label="Maximum Date">
                            <x-common.data-input-text
                                wire:model="filters.date_max"
                                id="filter-date-max" placeholder="MM/DD/YYYY"/>
                        </x-common.input.group>

                    </div>
                </div>
                <div class="flex justify-end">
                    <x-common.button.link wire:click="resetFilters" class="p-4">Reset
                        Filters
                    </x-common.button.link>
                </div>

            </div>
        @endif
    </div>

    <x-common.table>
        <x-slot name="head">
            <x-common.table.heading sortable wire:click="sortBy('name')"
                                    :direction="$sortDirection  === 'name' ?
                                    $sortDirection:null">Name
            </x-common.table.heading>
            <x-common.table.heading sortable wire:click="sortBy('mobile')"
                                    :direction="$sortDirection  === 'mobile' ?
                                    $sortDirection:null">Mobile
            </x-common.table.heading>
            <x-common.table.heading>
                Course
            </x-common.table.heading>
            <x-common.table.heading sortable wire:click="sortBy('created_at')"
                                    :direction="$sortDirection  === 'created_at' ?
                                    $sortDirection:null">Entry Date
            </x-common.table.heading>
            <x-common.table.heading>
                Actions
            </x-common.table.heading>
        </x-slot>
        <x-slot name="body">
            @forelse($queries as $query)
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    <x-common.table.cell class="">
                        <div>
                            <div>
                                {{$query->name}}
                            </div>
                            <div class="text-xs text-gray-500">{{$query->email}}</div>
                        </div>

                    </x-common.table.cell>
                    <x-common.table.cell>{{$query->mobile}}</x-common.table.cell>
                    <x-common.table.cell>
                        <div class="flex space-x-2">
                            @foreach($query->courses as $course)
                                <span class="px-2 py-1 flex rounded-full  bg-gray-100 text-xs">
                            {{$course->title}}
                            </span>
                                <br>
                            @endforeach
                        </div>
                    </x-common.table.cell>
                    <x-common.table.cell>{{$query->human_date}}</x-common.table.cell>
                    <x-common.table.cell>
                        <div class="flex space-x-2 items-center">
                            <a href="#" wire:click.prevent="showQuery({{$query->id}})">
                                <x-icons.eye class="w-6 h-6  text-cyan-700"/>
                            </a>

                            <a href="#" wire:click.prevent="showQuery({{$query->id}})">
                                <x-icons.edit  class="w-5 h-5  text-blue-700"/>
                            </a>

                            <a href="#" wire:click.prevent="showQuery({{$query->id}})">
                                <x-icons.trash class="w-5 h-5  text-red-700"/>
                            </a>
                        </div>
                    </x-common.table.cell>
                </x-common.table.row>
            @empty
                <x-common.table.row wire:loading.class.delay="opacity-50">
                    <x-common.table.cell colspan="5">
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
                                    <div class="pb-1 sm:pb-6">
                                        <div>
                                            <div class="mt-6 px-4 sm:mt-8 sm:flex sm:items-end sm:px-6">
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
                                                    Telephone
                                                </dt>
                                                <dd class="mt-1 text-sm text-gray-900 sm:col-span-2">
                                                    {{$showQueryDetails->telephone}}
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
