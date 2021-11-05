@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Admission Status" subtitle="Admission reports including stats."/>
    </x-common.page-header>
    <x-common.page-body>
        <div>
            <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
            <div class="mt-2 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
                <x-common.stat-card label="Daily Admissions" stat="{{$dStudent}}">
                    <x-slot name="icon">
                        <x-icons.users class="w-6 h-6 text-gray-400"/>
                    </x-slot>
                </x-common.stat-card>
                <x-common.stat-card label="Weekly Admission" stat="{{$wStudent}}">
                    <x-slot name="icon">
                        <x-icons.users class="w-6 h-6 text-gray-400"/>
                    </x-slot>
                </x-common.stat-card>
                <x-common.stat-card label="Montly Admissions" stat="{{$mStudent}}">
                    <x-slot name="icon">
                        <x-icons.users class="w-6 h-6 text-gray-400"/>

                    </x-slot>
                </x-common.stat-card>
                <x-common.stat-card label="Last Month Admissions" stat="{{$pMstudent}}">
                    <x-slot name="icon">
                        <x-icons.users class="w-6 h-6 text-gray-400"/>

                    </x-slot>
                </x-common.stat-card>
            </div>
        </div>
        <div class="mt-10">
            <div class="grid md:grid-cols-2 gap-5">
                <div>
                    <h2 class="text-lg mb-2 leading-6 font-medium text-gray-900">Recent Admissions</h2>
                    <x-common.table>
                        <x-slot name="head">
                            <x-common.table.heading>#</x-common.table.heading>
                            <x-common.table.heading>Student Name</x-common.table.heading>
                            <x-common.table.heading>Course</x-common.table.heading>
                            <x-common.table.heading>Admission Date</x-common.table.heading>
                        </x-slot>
                        <x-slot name="body">
                            @forelse($students as $student)
                                <x-common.table.row>
                                    <x-common.table.cell>{{$loop->iteration}}</x-common.table.cell>
                                    <x-common.table.cell>
                                        <div class="flex flex-col">
                                        <span>
                                            {{$student->name}}
                                        </span>
                                            <span class="text-xs">{{$student->mobile}}</span>
                                        </div>
                                    </x-common.table.cell>
                                    <x-common.table.cell>
                                        @forelse($student->batches as $batch)
                                            <div class="flex m-1 justify-center items-center">
                                            <span class="bg-gray-50 p-1 text-center text-xs
                                            rounded-full">{{$batch->title}}</span>
                                            </div>
                                        @empty
                                            <div class="text-xs text-center">
                                                Not Enrolled in a batch
                                            </div>
                                        @endforelse
                                    </x-common.table.cell>
                                    <x-common.table.cell>{{$student->created_at->diffForHumans()}}</x-common.table.cell>
                                </x-common.table.row>
                            @empty
                                <x-common.table.row>
                                    <x-common.table.cell colspan="4">No Data Found</x-common.table.cell>
                                </x-common.table.row>
                            @endforelse
                        </x-slot>
                    </x-common.table>
                </div>
                <div class="">
                    <h2 class="text-lg mb-2 leading-6 font-medium text-gray-900">Admission Ratio</h2>
                    <div class="bg-white p-4 rounded-lg shadow"></div>
                </div>
            </div>
        </div>
    </x-common.page-body>
@endsection
