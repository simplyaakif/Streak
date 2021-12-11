@extends('layouts.admin')

@section('content')
    <x-common.page-header>
        <x-common.ph-section-header title="Alumni" subtitle="Generate certificate for the alumni"/>
    </x-common.page-header>
    <x-common.page-body>
        <div class="max-w-6xl mx-auto">
            <h2 class="text-lg leading-6 font-medium text-gray-900">Alumni</h2>
            <div class="mt-4">
                <x-common.table>
                    <x-slot name="head">
                        <x-common.table.heading>Sr #</x-common.table.heading>
                        <x-common.table.heading>Student</x-common.table.heading>
                        <x-common.table.heading>Batch Name</x-common.table.heading>
                        <x-common.table.heading>Course Name</x-common.table.heading>
                        <x-common.table.heading>Status</x-common.table.heading>
                        <x-common.table.heading>Certificate Status</x-common.table.heading>
                        <x-common.table.heading>Actions</x-common.table.heading>
                    </x-slot>
                    <x-slot name="body">
                        @forelse($admissions as $admission)
                            <x-common.table.row>
                                <x-common.table.cell>{{$loop->iteration}}</x-common.table.cell>
                                <x-common.table.cell>{{$admission->student->name}}</x-common.table.cell>
                                <x-common.table.cell>{{$admission->batch->title}}</x-common.table.cell>
                                <x-common.table.cell>{{$admission->batch->course->title}}</x-common.table.cell>
                                <x-common.table.cell> Course
                                    {{App\Models\BatchStudent::STATUS[$admission->batch_status]}}
                                </x-common.table.cell>
                                <x-common.table.cell>
                                    @isset($admission->certificate)
                                        <span class="bg-cyan-100 p-1 text-cyan-800 rounded-full">Published</span>
                                    @else
{{--                                        <span class="bg-gray-100 p-1 rounded-full">Unpublished</span>--}}
                                        <livewire:admin.certificate.create :batch-student="$admission"/>
                                    @endisset
                                </x-common.table.cell>
                                <x-common.table.cell>
                                    <a href="{{route('admin.certificates.show',$admission->id)}}">
                                        <x-icons.eye class="w-4 h-4 text-gray-400"/>
                                    </a>
                                </x-common.table.cell>
                            </x-common.table.row>
                        @empty
                            <x-common.table.row>
                                <x-common.table.cell colspan="7"
                                                     class="text-center text-gray-400"
                                > No data found
                                </x-common.table.cell>
                            </x-common.table.row>
                        @endforelse
                    </x-slot>
                </x-common.table>
            </div>
        </div>
    </x-common.page-body>
@endsection
