@extends('layouts.student')
@section('main')
    <!-- This example requires Tailwind CSS v2.0+ -->

    <div class="bg-cyan-50 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <h2 class="text-2xl font-bold">{{$lesson->title}}</h2>
            <p>{{carbon($lesson->date)->format('D d-m-Y')}}</p>
        </div>
    </div>

        <div class="max-w-7xl mx-auto px-4 mt-8 sm:px-6 lg:px-8 ">
            <h2 class="font-bold">Short Description</h2>
            <p>{{$lesson->short_description}}</p>
        </div>

        <div class="max-w-7xl mx-auto px-4 mt-8 sm:px-6 lg:px-8 ">
            <h2 class="font-bold">Long Description</h2>
            <p class="prose">{{$lesson->long_description}}</p>
        </div>





@endsection
