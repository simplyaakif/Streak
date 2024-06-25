@extends('layouts.admin')
@section('content')
    <div>
        <!-- Profile header -->
        <div>
            <div>
                <img class="h-32 w-full object-cover lg:h-48"
                     src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                     alt="">
            </div>
            <div class="max-w-5xl mx-auto px-4 sm:px-6 ">
                <div class="sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                    <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                        <h1 class="text-2xl font-bold text-gray-900 truncate">
                            {{$query->name}}
                        </h1>
                    </div>
                </div>
                <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                    <h1 class="text-2xl font-bold text-gray-900 truncate">
                        {{$query->name}}
                    </h1>
                </div>
            </div>
        </div>

        <x-common.page-body>
            <article>

                <div class="grid md:grid-cols-5 gap-2">

                    <!-- Description list -->
                    <div class="col-span-3">
                        <div class=" mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                            <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Mobile Phone
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{$query->mobile}}
                                    </dd>
                                </div>

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Email
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{$query->email}}
                                    </dd>
                                </div>

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Telephone
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{$query->telephone}}
                                    </dd>
                                </div>

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Preferred Timings
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{$query->p_timings}}
                                    </dd>
                                </div>

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Marketing Reference
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{$query->reference}}
                                    </dd>
                                </div>

                                <div class="sm:col-span-1">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Remarks
                                    </dt>
                                    <dd class="mt-1 text-sm text-gray-900">
                                        {{$query->remarks}}
                                    </dd>
                                </div>

                                <div class="sm:col-span-2">
                                    <dt class="text-sm font-medium text-gray-500">
                                        Address
                                    </dt>
                                    <dd class="mt-1 max-w-prose text-sm text-gray-900 space-y-5">
                                        <p>
                                            {{$query->address}}
                                        </p>

                                    </dd>
                                </div>
                            </dl>
                        </div>
                    </div>

                    <div class="col-span-2">
                        <div class="mb-4 bg-white rounded shadow">
                            <div class="border-b text-xs p-4 border-solid mb-2 border-gray-300 ">
                                Courses Applied for
                            </div>
                            <div class="p-4  flex">
                                @foreach($query->courses as $course)
                                <div class="text-sm">{{$course->title}}</div>
                                @endforeach
                            </div>
                        </div>
                        <div class=" bg-white rounded shadow">
                            <!-- This example requires Tailwind CSS v2.0+ -->
                            <div class="border-b p-4 border-solid mb-2 border-gray-300 ">
                                Status
                            </div>
                            <div class="p-4 flow-root">
                                <ul role="list" class="-mb-8">
                                    @foreach($query->timelines as $timeline)
                                    <li>
                                        <div class="relative pb-8">
                                            <span class="absolute top-4 left-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                                            <div class="relative flex space-x-3">
                                                <div>
            <span class="h-8 w-8 rounded-full bg-gray-400 flex items-center justify-center ring-8 ring-white">
              <!-- Heroicon name: solid/user -->
              <svg class="h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
              </svg>
            </span>
                                                </div>
                                                <div class="min-w-0 flex-1 pt-1.5 flex justify-between space-x-4">
                                                    <div>
                                                        <p class="text-sm text-gray-500">{{$timeline->title}}
                                                        </p>
                                                        <p class="text-xs">Follow up date</p>
                                                        <small>
                                                            {{Carbon\Carbon::parse($timeline->pivot->fw_date_time)
                                                            ->format
                                                            ('h:i:A
                                                             d F
                                                             Y')}}</small>
                                                        <div class="text-xs text-gray-500">
                                                            Remarks: {{$timeline->pivot->remarks}}
                                                        </div>
                                                    </div>
                                                    <div class="text-right text-sm whitespace-nowrap text-gray-500">
                                                        <time
                                                            datetime="2020-09-20">
                                                            {{$timeline->pivot->created_at->format('d F Y')}}
                                                        </time>
                                                    </div>

                                                </div>
                                            </div>

                                        </div>
                                    </li>
                                    @endforeach

                                </ul>
                            </div>

                        </div>
                    </div>

                </div>

            </article>
        </x-common.page-body>
    </div>

@endsection
