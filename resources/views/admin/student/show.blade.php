@extends('layouts.admin')
@section('content')
    <div class="row">
        <article>
            <div>
                <div>
                    <img class="h-32 w-full object-cover lg:h-48"
                         src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                         alt="">
                </div>
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                        <div class="flex">
                            @forelse($student->dp as $key => $entry)
                                {{--                            <a class="link-photo" href="{{ $entry['url'] }}">--}}
                                {{--                                <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">--}}
                                {{--                            </a>--}}
                                <img
                                    class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32 flex-shrink-0 object-cover mx-auto rounded-full"
                                    src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}"
                                    title="{{ $entry['name'] }}"
                                >
                            @empty
                                <img
                                    class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32 flex-shrink-0 mx-auto rounded-full"
                                    src="{{$student->avatarUrl()}}"
                                    alt="">
                            @endforelse
                        </div>
                        <div
                            class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                            <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                                <h1 class="text-2xl font-bold text-gray-900 truncate">
                                    {{$student->name}}
                                </h1>
                            </div>
                            <div
                                class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
{{--                                @canImpersonate($guard = null)--}}
{{--                                <a--}}
{{--                                    href="{{ route('impersonate', $student->user_id) }}"--}}
{{--                                    type="button"--}}
{{--                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">--}}
{{--                                    <span>Impersonate</span>--}}
{{--                                </a>--}}
{{--                                @endCanImpersonate--}}
                                <button type="button"
                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                         x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <span>Message</span>
                                </button>
                                <button type="button"
                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                         x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <span>Email</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                        <h1 class="text-2xl font-bold text-gray-900 truncate">
                            {{$student->name}}
                        </h1>
                    </div>
                </div>
            </div>

            <x-tabs first="profile" border="border-b border-solid">
                <x-slot name="tabs">
                    <x-tab tab="profile">Student Details</x-tab>
                    <x-tab tab="sessions">Sessions</x-tab>
                    <x-tab tab="user_account">User Account</x-tab>
{{--                    <x-tab tab="guardian">Guardian</x-tab>--}}
                    <x-tab tab="attendance">Attendance</x-tab>
{{--                    <x-tab tab="sms">SMS Records</x-tab>--}}
{{--                    <x-tab tab="email">Email Records</x-tab>--}}
                </x-slot>
                <x-slot name="details">
                    <x-tab-details tab="profile">
                        <livewire:admin.filament.student.student-edit
                        :student_id="$student->id"/>
                    </x-tab-details>
                    <x-tab-details tab="sessions">
                        <livewire:admin.filament.student.batch.batch-index
                            :student_id="$student->id"
                        />
                        @foreach($student->batches as $batch)
                            <div class="mt-10">
                                <div class="bg-white shadow overflow-hidden sm:rounded-lg">
                                    <div class="px-4 py-5 sm:px-6">
                                        <h3 class="text-lg leading-6 font-medium text-gray-900">
                                            {{$batch->title}}
                                        </h3>
                                        <p class="mt-1 max-w-2xl text-sm text-gray-500">
                                            {{$batch->duration}}
                                        </p>
                                    </div>

                                    <div class="bg-gray-100 px-4 py-5 sm:px-6">
                                        @php
                                        $recoveries = App\Models\Recovery::withoutGlobalScopes()->where('batch_student_id',$batch->pivot->id)
                                                      ->get()
                                        @endphp
                                        <h3 class="text-xl font-bold">Fee Schedule</h3>
                                        <div>
                                            <ul>
                                                <li>
                                                    <div class="grid gap-4 grid-cols-6">
                                                        <div class="font-bold">Amount</div>
                                                        <div class="font-bold">Due Date</div>
                                                        <div class="font-bold">Status</div>
                                                        <div class="font-bold">Paid On</div>
                                                        <div class="font-bold">Account</div>
                                                        <div class="font-bold">Slip/Transaction ID</div>
                                                    </div>
                                                </li>
                                                @forelse($recoveries as $recovery)
                                                <li>
                                                    <div class="grid gap-4 grid-cols-6">
                                                    <div>{{$recovery->amount}} Rs</div>
                                                    <div>{{$recovery->due_date}}</div>
                                                    <div>{{$recovery->is_paid ? "Paid":"Pending" }}</div>
                                                    <div>{{$recovery->paid_on}}</div>
                                                    <div>{{$recovery->account?->title}}</div>
                                                    <div>{{$recovery->slip_number}}</div>
                                                    </div>
                                                </li>
                                                @empty
                                                @endforelse
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </x-tab-details>

                    <x-tab-details tab="user_account">
                        <livewire:admin.filament.student.user-edit
                            :student_id="$student->id"
                            :user_id="$student->user_id"/>
                    </x-tab-details>
                    <x-tab-details tab="guardian">
                        <x-common.empty-state title="No guardian" subtitle="Add a guardian to this student" label="Add
                Guardian"/>
                    </x-tab-details>
                    <x-tab-details tab="attendance">
                        <livewire:admin.filament.student.attendance-show
                            :student_id="$student->id"
                            />
                    </x-tab-details>
                </x-slot>
            </x-tabs>

        </article>
        <div class="card bg-blueGray-100">
        </div>
    </div>
@endsection
