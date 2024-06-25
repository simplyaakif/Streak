@extends('layouts.student')

@section('main')
    <x-student.pg-header>
        <x-student.pg-header-title title="Support" subtitle="Use the system to ask for support"/>
        <div>
            <livewire:student.issue.create/>
        </div>
    </x-student.pg-header>

    <div class="max-w-6xl mx-auto mt-10">
        <x-common.table>
            <x-slot name="head">
                <x-common.table.heading>Sr #</x-common.table.heading>
                <x-common.table.heading class="text-center">Title</x-common.table.heading>
                <x-common.table.heading class="text-center">Type</x-common.table.heading>
                <x-common.table.heading class="text-center">Status</x-common.table.heading>
                <x-common.table.heading>Created At</x-common.table.heading>
                <x-common.table.heading>View</x-common.table.heading>
            </x-slot>
            <x-slot name="body">
                @forelse($issues as $issue)
                    <x-common.table.row>
                        <x-common.table.cell class="truncate">{{$issues->firstItem() + $loop->iteration -1}}
                        </x-common.table.cell>
                        <x-common.table.cell>{{$issue->title}}</x-common.table.cell>
                        <x-common.table.cell>{{$issue->type}}</x-common.table.cell>
                        <x-common.table.cell>{{$issue->status}}</x-common.table.cell>
                        <x-common.table.cell>{{$issue->created_at->diffForHumans()}}</x-common.table.cell>
                        <x-common.table.cell class="text-cyan-800">
                            <a href="{{route('student.issue',$issue->id)}}">
                                View Replies
                            </a>
                        </x-common.table.cell>
                    </x-common.table.row>
                @empty
                    <x-common.table.row>
                        <x-common.table.cell colspan="6" class="text-center">
                            You have not requested any support till yet.
                        </x-common.table.cell>
                    </x-common.table.row>
                @endforelse
            </x-slot>
        </x-common.table>
        <div class="mt-4">
            {{$issues->links()}}
        </div>
    </div>

    <div class="mb-2"></div>

@endsection
