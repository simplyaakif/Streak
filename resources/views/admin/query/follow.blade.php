@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <div class="">

            <x-common.ph-section-header title="Queries Follow Up" subtitle="Queries follow up Reports"/>
        </div>
    </x-common.page-header>

    <x-common.layout-subpage>
        <div class="divide-y mb-8">
                        <div>
                            <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
                            <div class="mt-2 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
                                <!-- Card -->
                                <x-common.stat-card can="query_show" label="Previous Pending" :stat="$previous">
                                    <x-slot name="icon">
                                        <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                                    </x-slot>
                                </x-common.stat-card>
                                <x-common.stat-card can="query_show" label="Today Follow Ups" :stat="$todays">
                                    <x-slot name="icon">
                                        <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                                    </x-slot>
                                </x-common.stat-card>
                                <x-common.stat-card can="query_show" label="Tomorrow Follow Ups" :stat="$tomorrows">
                                    <x-slot name="icon">
                                        <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                                    </x-slot>
                                </x-common.stat-card>
                                <x-common.stat-card can="query_show" label="Future Follow Ups" :stat="$future">
                                    <x-slot name="icon">
                                        <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                                    </x-slot>
                                </x-common.stat-card>

                            </div>
                        </div>
            <div class="mt-8 pt-8">
                <h2 class="text-lg leading-6 font-medium text-gray-900">Follow Ups</h2>
                <x-common.table class="mt-2">
                    <x-slot name="head">
                        <x-common.table.heading>#</x-common.table.heading>
                        <x-common.table.heading>Query</x-common.table.heading>
                        <x-common.table.heading>Course</x-common.table.heading>
                        <x-common.table.heading>Status</x-common.table.heading>
                        <x-common.table.heading>Remark</x-common.table.heading>
                        <x-common.table.heading>Entry Details</x-common.table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse($followUps as $followUp)
                            @php $query = $followUp['query'] @endphp
                            <x-common.table.row wire:loading.class.delay="opacity-50">
                                <x-common.table.cell class="w-2">
                                    {{$loop->iteration }}
                                </x-common.table.cell>
                                <x-common.table.cell class="">
                                    <div class="flex space-x-2 items-center">
                                        <div class="w-12">
                                            <img class="h-10 w-10 rounded-full" src="{{$query->avatarUrl()}}"
                                                 alt="">
                                        </div>
                                        <div>
                                            <div>
                                                {{$query->name}}
                                                <div class="text-xs text-gray-500">{{$query->mobile}}</div>
                                            </div>
                                        </div>
                                    </div>

                                </x-common.table.cell>
                                <x-common.table.cell>
                                    <div class="flex text-center space-x-2 max-w-xs">
                                        @foreach($query->courses as $course)
                                            <div class="bg-gray-100 px-2 py-1 rounded-lg">
                                                <div class="w-20 text-xs">
                                                    {{$course->title}}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
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
                                <x-common.table.cell class="">
                                    <div class="text-xs">
                                    {{$query->recent_timeline_remark }}
                                    </div>
                                </x-common.table.cell>
                                <x-common.table.cell>
                                    <div>
                                        @if($query->recent_timeline_by)
                                        <div class="text-xs">Status By:
                                            <span class="font-bold">
{{$query->recent_timeline_by->name}}
                                            </span>
                                        </div>
                                        @endif
                                    <span class="text-xs">{{
    Carbon\Carbon::parse($query->recent_timeline->pivot->created_at)->format('h:i:s a d-m-Y')
                                    }}</span>
                                    </div>

                                </x-common.table.cell>
                            </x-common.table.row>
                        @empty
                            <x-common.table.row>
                                <x-common.table.cell colspan="6">
                                    <div class="text-center text-gray-400 py-4">
                                        No Query Found
                                    </div>
                                </x-common.table.cell>
                            </x-common.table.row>
                        @endforelse
                    </x-slot>
                </x-common.table>
            </div>
        </div>

    </x-common.layout-subpage>
@endsection
