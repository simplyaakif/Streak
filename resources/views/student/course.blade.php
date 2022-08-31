@extends('layouts.student')

@section('main')
    <x-student.pg-header>
        <x-student.pg-header-title :title="$batch->title" subtitle="Session details, Notes, Study Material & your
        records"/>
    </x-student.pg-header>
    <div class="bg-gray-50 py-2">
        <x-tabs first="batch" border="border-b border-gray-100">
            <x-slot name="tabs">
                <x-tab tab="batch">Batch</x-tab>
                <x-tab tab="attendance">Attendance</x-tab>
                <x-tab tab="class">Class Lessons</x-tab>
                <x-tab tab="home">Home Work</x-tab>
            </x-slot>
            <x-slot name="details">
        <x-tab-details tab="batch">
            <div class="py-8 max-w-3xl mx-auto ">

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
                                    <th>Due Date</th>
                                    <th class="text-right">Status</th>
                                    <th>Paid On</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($recoveries as $recovery)
                                    <tr>
                                        <td class="text-left">{{$loop->iteration}}</td>
                                        <td class="text-right">{{$recovery->amount}}</td>
                                        <td class="">{{carbon($recovery->due_date)->format('d-M-Y')}}</td>
                                        <td class="">{{$recovery->is_paid ? "Paid":"Pending" }}</td>
                                        <td class="">{{carbon($recovery->paid_on)->format('d-M-Y')}}</td>
                                        <td></td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4"> No Record Found</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </section>
            </div>

        </x-tab-details>
        <x-tab-details tab="attendance">
            <div class="py-8 max-w-3xl mx-auto sm:px-6 lg:max-w-7xl ">
                <h2 class="text-2xl font-bold mb-4">Attendance Records</h2>
                <livewire:admin.filament.student.attendance-show
                    :student_id="Auth::user()->student->id"
                />
            </div>
        </x-tab-details>
        <x-tab-details tab="class">
            <div class="py-8 max-w-3xl mx-auto sm:px-6 lg:max-w-7xl ">
                <h2 class="text-2xl font-bold mb-4">Class Lessons</h2>
                <livewire:student.course.class-lesson
                    :student_id="Auth::user()->student->id"
                    :batch_id="$batch->id"
                    :session_start_date="$batch->pivot->session_start_date"
                    :session_end_date="$batch->pivot->session_end_date"
                />
            </div>
        </x-tab-details>
        <x-tab-details tab="home">
            <livewire:student.course.home
                :batch_id="$batch->id"
                :session_start_date="$batch->pivot->session_start_date"
                :session_end_date="$batch->pivot->session_end_date"/>
        </x-tab-details>
            </x-slot>
        </x-tabs>








    </div>

@endsection
