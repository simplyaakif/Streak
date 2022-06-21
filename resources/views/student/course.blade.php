@extends('layouts.student')

@section('main')
    <x-student.pg-header>
        <x-student.pg-header-title :title="$batch->title" subtitle="Session details, Notes, Study Material & your
        records"/>
    </x-student.pg-header>
    <div class="bg-gray-50">

        <div class="py-8 max-w-3xl mx-auto grid grid-cols-1 gap-6 sm:px-6 lg:max-w-7xl lg:grid-flow-col-dense
    lg:grid-cols-3">
            <div class="space-y-6 lg:col-start-1 lg:col-span-2">
                <!-- Description list-->
                <section aria-labelledby="applicant-information-title">
                    <div class="bg-white shadow sm:rounded-lg">
                        <div class="px-4 py-5 sm:px-6">
                            <h2 id="applicant-information-title" class="text-lg leading-6 font-medium text-gray-900">
                                Batch Information
                            </h2>
                            <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                Course Details & Learning material.
                            </p>
                        </div>
                        <div class="border-t border-gray-200 px-4 py-5 sm:px-6">
                            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">
                                {{--                            <div class="sm:col-span-1">--}}
                                {{--                                <dt class="text-sm font-medium text-gray-500">--}}
                                {{--                                    Application for--}}
                                {{--                                </dt>--}}
                                {{--                                <dd class="mt-1 text-sm text-gray-900">--}}
                                {{--                                    Backend Developer--}}
                                {{--                                </dd>--}}
                                {{--                            </div>--}}
                                {{--                            <div class="sm:col-span-1">--}}
                                {{--                                <dt class="text-sm font-medium text-gray-500">--}}
                                {{--                                    Email address--}}
                                {{--                                </dt>--}}
                                {{--                                <dd class="mt-1 text-sm text-gray-900">--}}
                                {{--                                    ricardocooper@example.com--}}
                                {{--                                </dd>--}}
                                {{--                            </div>--}}
                                {{--                            <div class="sm:col-span-1">--}}
                                {{--                                <dt class="text-sm font-medium text-gray-500">--}}
                                {{--                                    Salary expectation--}}
                                {{--                                </dt>--}}
                                {{--                                <dd class="mt-1 text-sm text-gray-900">--}}
                                {{--                                    $120,000--}}
                                {{--                                </dd>--}}
                                {{--                            </div>--}}
                                {{--                            <div class="sm:col-span-1">--}}
                                {{--                                <dt class="text-sm font-medium text-gray-500">--}}
                                {{--                                    Phone--}}
                                {{--                                </dt>--}}
                                {{--                                <dd class="mt-1 text-sm text-gray-900">--}}
                                {{--                                    +1 555-555-5555--}}
                                {{--                                </dd>--}}
                                {{--                            </div>--}}
                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500">
                                        About
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        Work in Progress
                                    </dd>
                                </div>
                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Resources
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        Work In Progress
                                        {{--                                        <ul role="list"--}}
                                        {{--                                            class="border border-gray-200 rounded-md divide-y divide-gray-200">--}}

                                        {{--                                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">--}}
                                        {{--                                                <div class="w-0 flex-1 flex items-center">--}}
                                        {{--                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400"--}}
                                        {{--                                                         x-description="Heroicon name: solid/paper-clip"--}}
                                        {{--                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"--}}
                                        {{--                                                         fill="currentColor" aria-hidden="true">--}}
                                        {{--                                                        <path fill-rule="evenodd"--}}
                                        {{--                                                              d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"--}}
                                        {{--                                                              clip-rule="evenodd"></path>--}}
                                        {{--                                                    </svg>--}}
                                        {{--                                                    <span class="ml-2 flex-1 w-0 truncate">--}}
                                        {{--                                resume_front_end_developer.pdf--}}
                                        {{--                              </span>--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <div class="ml-4 flex-shrink-0">--}}
                                        {{--                                                    <a href="#" class="font-medium text-blue-600 hover:text-blue-500">--}}
                                        {{--                                                        Download--}}
                                        {{--                                                    </a>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </li>--}}

                                        {{--                                            <li class="pl-3 pr-4 py-3 flex items-center justify-between text-sm">--}}
                                        {{--                                                <div class="w-0 flex-1 flex items-center">--}}
                                        {{--                                                    <svg class="flex-shrink-0 h-5 w-5 text-gray-400"--}}
                                        {{--                                                         x-description="Heroicon name: solid/paper-clip"--}}
                                        {{--                                                         xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"--}}
                                        {{--                                                         fill="currentColor" aria-hidden="true">--}}
                                        {{--                                                        <path fill-rule="evenodd"--}}
                                        {{--                                                              d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z"--}}
                                        {{--                                                              clip-rule="evenodd"></path>--}}
                                        {{--                                                    </svg>--}}
                                        {{--                                                    <span class="ml-2 flex-1 w-0 truncate">--}}
                                        {{--                                coverletter_front_end_developer.pdf--}}
                                        {{--                              </span>--}}
                                        {{--                                                </div>--}}
                                        {{--                                                <div class="ml-4 flex-shrink-0">--}}
                                        {{--                                                    <a href="#" class="font-medium text-blue-600 hover:text-blue-500">--}}
                                        {{--                                                        Download--}}
                                        {{--                                                    </a>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </li>--}}

                                        {{--                                        </ul>--}}
                                    </dd>
                                </div>
                            </dl>
                        </div>
                        <div>
                            <a href="#"
                               class="block bg-gray-50 text-sm font-medium text-gray-500 text-center px-4 py-4
                               hover:text-gray-700 sm:rounded-b-lg">.</a>
                        </div>
                    </div>
                </section>

                <!-- Comments-->
            </div>

            <section aria-labelledby="timeline-title" class="lg:col-start-3 lg:col-span-1">
                <div class="bg-white px-4 py-5 shadow sm:rounded-lg sm:px-6">
                    <h2 id="timeline-title" class="text-lg font-medium text-gray-900">Fee Status</h2>

                    <!-- Activity Feed -->
                    <div class="mt-6 flow-root">
                        @php
                            $recoveries = App\Models\Recovery::where('batch_id',$batch->id)
                                          ->where('student_id',Auth::user()->student->id)->get()
                        @endphp
                        <table class="w-full">
                            <thead>
                            <tr>
                                <th class="text-left">Sr. #</th>
                                <th class="text-right">Amount</th>
                                <th class="text-right">Status</th>
                                <th>Due Date</th>
                            </tr>
                            </thead>
                            <tbody>
                                @forelse($recoveries as $recovery)
                            <tr>
                                    <td class="text-left">{{$loop->iteration}}</td>
                                    <td class="text-right">{{$recovery->amount}}</td>
                                    <td class="text-right">{{$recovery->is_paid ? "Paid":"Pending" }}</td>
                                    <td class="text-right">{{$recovery->due_date}}</td>
                            </tr>
                                @empty
                            <tr>
                                    <td colspan="4"> No Record Found</td>
                            </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    {{--                <div class="mt-6 flex flex-col justify-stretch">--}}
                    {{--                    <button type="button" class="inline-flex items-center justify-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-blue-600 hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">--}}
                    {{--                        Advance to offer--}}
                    {{--                    </button>--}}
                    {{--                </div>--}}
                </div>
            </section>
        </div>
    </div>

@endsection
