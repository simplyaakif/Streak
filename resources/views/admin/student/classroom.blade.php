@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="{{$batch->title}}" subtitle="Batch Details"/>
        <div>
            <x-button.primary>Take Attendance</x-button.primary>
            <x-button.secondary>Add Lesson Planner</x-button.secondary>
        </div>
    </x-common.page-header>

    <x-common.page-body>
        <!-- This example requires Tailwind CSS v2.0+ -->
        <ul role="list" class="grid grid-cols-1 gap-6 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
            @forelse($batch->students as $student)
                <li class="col-span-1 flex flex-col text-center bg-white rounded-lg shadow divide-y divide-gray-200">
                    <div class="flex-1 flex flex-col p-8">
                        @forelse($student->dp as $key => $entry)
{{--                            <a class="link-photo" href="{{ $entry['url'] }}">--}}
{{--                                <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">--}}
{{--                            </a>--}}
                        <img class="w-24 h-24 flex-shrink-0 object-cover mx-auto rounded-full"
                             src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}"
                             >
                        @empty
                            <img class="w-24 h-24 flex-shrink-0 mx-auto rounded-full" src="{{$student->avatarUrl()}}"
                                 alt="">
                            @endforelse
                        <h3 class="mt-6 text-gray-900 text-sm font-medium">{{$student->name}}</h3>
                        <dl class="mt-1 flex-grow flex flex-col justify-between">
                            <dt class="sr-only">Student Details</dt>
                            <dd class="mb-3">
                                <span class="px-2 py-1 text-green-800 text-xs font-medium bg-green-100 rounded-full">Admin</span>
                            </dd>
                            <dd class="text-gray-500 text-sm">Start Date:
                                <span class="text-black">
                                {{$student->pivot->session_start_date}}
                                </span>
                            </dd>
                            <dd class="text-gray-500 text-sm">End Date:
                                <span class="text-black">
                                {{$student->pivot->session_end_date}}
                                </span>
                            </dd>
                            <dt class="sr-only">Role</dt>
                        </dl>
                    </div>
                </li>
            @empty
                <li>No student active or enrolled in this batch</li>
            @endforelse

        <!-- More people... -->
        </ul>

    </x-common.page-body>
@endsection
