@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Classrooms" subtitle="All active and current classrooms"/>
    </x-common.page-header>
    <x-common.page-body>

        <div>
            <h2 class="text-lg leading-6 font-medium text-gray-900">Active Class Batches</h2>
            <div class="mt-4 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-3">
                @forelse($batches as $batch)
                    <div class="bg-white rounded-lg shadow">
                        <div class="p-4">
                            <div class="flex justify-between items-center">
                                <div>

                            <div class="text-lg font-medium">
                                {{$batch->title}}
                            </div>
                            <div class="text-sm text-gray-400">
                                Active Students
                            </div>
                                </div>
                                <div>
                                <span class="bg-cyan-600 text-white rounded-full text-base flex justify-center
                                items-center w-8 h-8">
                                {{count($batch->activeStudents)}}
                                </span>

                                </div>
                            </div>
                        </div>
                        <div class="w-full px-4  py-2 text-sm rounded-b-lg bg-gray-50">
                            <a href="{{route('admin.students.classroom',$batch->id)}}">
                                View Batch
                            </a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>
    </x-common.page-body>

@endsection
