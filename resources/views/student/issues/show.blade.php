@extends('layouts.student')

@section('main')
    <x-student.pg-header>
        <x-student.pg-header-title :title="$issue->title"
                                   subtitle="Created {{$issue->created_at->diffForHumans()}}"
        />
    </x-student.pg-header>

    <div class="bg-gray-50">
    <div class="max-w-5xl mx-auto ">
        <ul role="list" class="py-4 space-y-2 sm:px-6 sm:space-y-4 lg:px-8">
            @forelse($issue->replies as $reply)
                <li class="bg-white px-4 py-6 shadow sm:rounded-lg sm:px-6">
                    <div class="sm:flex sm:justify-between sm:items-baseline">
                        <h3 class="text-base font-medium">
                            <span class="text-gray-900">{{$reply->user->name}}</span>
                            <!-- space -->
                            <span class="text-gray-600">wrote</span>
                        </h3>
                        <p class="mt-1 text-sm text-gray-600 whitespace-nowrap sm:mt-0 sm:ml-3">
                            <time datetime="{{$reply->created_at}}">{{$reply->created_at->diffForHumans()}} at
                                {{$reply->created_at->format('h:i:a')}}
                            </time>
                        </p>
                    </div>
                    <div class="mt-4 space-y-6 text-sm text-gray-800">
                        {!! $reply->message !!}
                    </div>
                </li>
            @empty
                <li class="text-center py-4 text-gray-400 text-lg">
                    No reply in the system
                </li>
            @endforelse

            <li class="mt-4">
                <form action="">
                    <x-common.data-textarea rows="10" placeholder="Write a reply"/>
                    <x-button.primary>Submit</x-button.primary>
                </form>
            </li>
        </ul>
    </div>
    </div>

@endsection
