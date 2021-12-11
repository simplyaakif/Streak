@extends('layouts.student')
@section('main')

    <!-- This example requires Tailwind CSS v2.0+ -->

    <div class="bg-cyan-50 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <x-student.profile-header :student="Auth::user()->student"/>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-6">

        <x-student.alerts/>

    </div>

    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 my-6">
        <div class="pb-5 border-b border-gray-200 mb-5">
            <h3 class="text-lg leading-6 font-medium text-gray-900">
                Your Active Courses
            </h3>
            <p class="mt-2 max-w-4xl text-sm text-gray-500">All the courses you are currently enrolled in.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
            @forelse(Auth::user()->student->batches as $batch)
                <a href="{{route('student.course',$batch->id)}}">
                <div class="text-xl bg-cyan-50 shadow rounded-md  flex justify-between items-center p-4
                text-coolGray-900">
                    <div>
                        <div class="font-bold mb-0">
                            {{$batch->title}}
                        </div>

                        <div class="flex flex-col my-2">
                        <small class="text-coolGray-900 text-sm">Start Date:
                            <strong>
                            {{Carbon\Carbon::parse($batch->pivot->session_start_date)->format('M d Y')}}
                            </strong>
                        </small>
                        <small class="text-coolGray-900 text-sm">End Date:
                            <strong>
                            {{Carbon\Carbon::parse($batch->pivot->session_end_date)->format('M d Y')}}
                            </strong>
                        </small>
                        </div>
                    </div>
                    <div>
                        <div class="group rounded-full bg-cyan-100 flex items-center justify-center w-8 h-8">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 group-hover:text-cyan-400 transition
                        transition-all
                        text-coolGray-900"
                                 viewBox="0 0 20 20"
                                 fill="currentColor">
                                <path
                                    d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"/>
                            </svg>
                        </div>
                    </div>
                </div>
                </a>

            @empty
                You are not enrolled in any batch currently
            @endforelse
        </div>
    </div>

    <div class="bg-gray-50 py-6">
        <!-- This example requires Tailwind CSS v2.0+ -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Content goes here -->
            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="pb-5 border-b border-gray-200 mb-5">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                            Latest Discussions
                        </h3>
                        <p class="mt-2 max-w-4xl text-sm text-gray-500">Workcation is a property rental website. Etiam
                            ullamcorper massa viverra consequat, consectetur id nulla tempus. Fringilla egestas justo
                            massa purus sagittis malesuada.</p>
                    </div>
                    <button type="button"
                            class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        View All Discussions
                    </button>
                </div>
            </div>

            <!-- This example requires Tailwind CSS v2.0+ -->
            <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
                @forelse($discussions as $discussion)
                    <div
                        class="relative rounded-lg border border-gray-300 bg-white px-6 py-5 shadow-sm flex items-center space-x-3 hover:border-gray-400 focus-within:ring-2 focus-within:ring-offset-2 focus-within:ring-indigo-500">
                        <div class="flex-shrink-0">
                            <img class="h-10 w-10 rounded-full"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80"
                                 alt="">
                        </div>
                        <div class="flex-1 min-w-0">
                            <a href="#" class="focus:outline-none">
                                <span class="absolute inset-0" aria-hidden="true"></span>
                                <p class="text-sm font-medium text-gray-900">
                                   {{$discussion->title}}
                                </p>
                                <p class="text-sm text-gray-500 truncate">
                                    What the hell is real past and how do we distinguish between that from the current
                                    one. Why is it even required.
                                </p>
                            </a>
                        </div>
                    </div>
            @empty
                    <p>No discussions found.</p>
            @endforelse
            <!-- More people... -->
            </div>

        </div>
    </div>


@endsection
