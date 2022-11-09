@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="{{$batch->title}}" subtitle="Batch Details"/>
        <div class="flex space-x-2">
            <a href="{{route('admin.stream.class',$batch->id)}}">
                <x-button.secondary><x-icons.book class="w-6 h-6 text-gray-400" /></x-button.secondary>
            </a>
        </div>
    </x-common.page-header>

    <x-common.page-body>

        <x-tabs first="students" border="border-b border-solid border-gray-300">
            <x-slot name="tabs">
                <x-tab tab="students">Students</x-tab>
                <x-tab tab="attendance">Attendance Records</x-tab>
                <x-tab tab="lesson_planner">Class Work</x-tab>
                <x-tab tab="home_tasks">Home Tasks</x-tab>
{{--                <x-tab tab="class_exams">Class Examination Results</x-tab>--}}
            </x-slot>
            <x-slot name="details">
                <x-tab-details tab="students">
                    <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                        @forelse($batch->activeStudents as $student)
                            <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                                <div class="flex-1 flex flex-col p-8">
                                    <a href="{{route('admin.students.show',$student->id)}}">
                                    @forelse($student->dp as $key => $entry)
                                        {{--                            <a class="link-photo" href="{{ $entry['url'] }}">--}}
                                        {{--                                <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">--}}
                                        {{--                            </a>--}}
                                        <img class="w-24 h-24 flex-shrink-0 object-cover mx-auto rounded-full"
                                             src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}"
                                             title="{{ $entry['name'] }}"
                                        >
                                    @empty
                                        <img class="w-24 h-24 flex-shrink-0 mx-auto rounded-full"
                                             src="{{$student->avatarUrl()}}"
                                             alt="">
                                    @endforelse


                                    <h3 class="mt-6 hover:text-cyan-700 text-gray-900 text-sm
                                    font-medium">{{$student->name}}</h3>
                                        </a>
                                    <dl class="mt-1 flex-grow flex flex-col justify-between">
                                        <dt class="sr-only">Student Details</dt>
{{--                                        <dd class="mb-3">--}}
{{--                                            <span--}}
{{--                                                class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">Admin</span>--}}
{{--                                        </dd>--}}
                                        <dd class="text-gray-500 text-sm">Start:
                                            <span class="text-black">
                                {{carbon($student->pivot->session_start_date)->format('d-M-Y')}}
                                </span>
                                        </dd>
                                        <dd class="text-gray-500 text-sm">End:
                                            <span class="text-black">
                                {{carbon($student->pivot->session_end_date)->format('d-M-Y')}}
                                </span>
                                        </dd>
                                        <dt class="text-sm my-2 bg-cyan-100 ">Last Login</dt>
                                        <dd class="text-xs">{{json_encode($student->last_login)}}</dd>
                                    </dl>
                                </div>
                            </li>
                        @empty
                            <li class="w-full text-center p-4 sm:col-span-2 md:col-span-3 lg:col-span-4">No student
                                active or
                                enrolled in this batch
                            </li>
                    @endforelse

                    <!-- More people... -->
                    </ul>
                </x-tab-details>
                <x-tab-details tab="attendance">
                    <livewire:admin.filament.classroom.student-attendance/>
                    <livewire:admin.student-attendance :batch="$batch"/>
                </x-tab-details>
                <x-tab-details tab="lesson_planner">
                    <livewire:admin.class-room.lesson-planner :batch="$batch"/>
                </x-tab-details>
                <x-tab-details tab="home_tasks">
                    <livewire:admin.filament.student.home-task :batch="$batch"/>
                </x-tab-details>
                <x-tab-details tab="class_exams">Class Examination</x-tab-details>
            </x-slot>
        </x-tabs>

    </x-common.page-body>
@endsection
