@extends('layouts.admin')
@section('content')

    <x-common.page-header>
        <div class="">

            <x-common.ph-section-header title="Queries Dashboard" subtitle="Queries Reports and Sub Reports"/>
        </div>
    </x-common.page-header>

    <x-common.layout-subpage>
        <div class="divide-y">

            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
                <div class="mt-2 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
                    <x-common.stat-card can="query_show" label="Daily Queries" stat="{{$dQuery}}">
                        <x-slot name="icon">
                            <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card can="query_show" label="Weekly Queries" stat="{{$wQuery}}">
                        <x-slot name="icon">
                            <x-icons.user-comment class="w-6 h-6 text-gray-400"/>

                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card can="query_show" label="Montly Queries" stat="{{$mQuery}}">
                        <x-slot name="icon">
                            <x-icons.user-comment class="w-6 h-6 text-gray-400"/>

                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card can="query_show" label="Last Month Queries" stat="{{$pMquery}}">
                        <x-slot name="icon">
                            <x-icons.user-comment class="w-6 h-6 text-gray-400"/>

                        </x-slot>
                    </x-common.stat-card>
                </div>
            </div>

            <div class="mt-8 pt-8 pb-16">
                <h2 class="text-lg leading-6 font-medium text-gray-900 mb-2">Records</h2>
                <x-common.table>
                    <x-slot name="head">
                        <x-common.table.heading>#</x-common.table.heading>
                        <x-common.table.heading>Query</x-common.table.heading>
                        <x-common.table.heading>Course</x-common.table.heading>
                        <x-common.table.heading>Status</x-common.table.heading>
                        <x-common.table.heading>Entry By</x-common.table.heading>
                        <x-common.table.heading>Entry Date</x-common.table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse($queries as $query)
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
                                                <div class="text-xs text-gray-500">{{$query->email}}</div>
                                            </div>
                                        </div>
                                    </div>

                                </x-common.table.cell>
                                <x-common.table.cell>
                                    <div class="flex text-center space-x-2 max-w-xs">
                                        @foreach($query->courses as $course)
                                            <div>
                                <span class="px-2 py-1 truncate rounded-full bg-gray-100 text-xs">
                                    {{$course->title}}
                                </span>
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
                                        <span class="text-red-600 text-xs">
                                {{$query->recent_timeline_date }}
                            </span>
                                    </div>
                                </x-common.table.cell>
                                <x-common.table.cell>
                                    <span class="text-xs">{{$query->human_date}}</span>
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
