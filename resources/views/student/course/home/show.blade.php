@extends('layouts.student')
@section('main')
    <!-- This example requires Tailwind CSS v2.0+ -->

    <div class="bg-cyan-50 py-6">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
            <h2 class="text-2xl font-bold">{{$homework->title}}</h2>
            <p>{{carbon($homework->created_at)->format('D d-m-Y')}}</p>
        </div>
    </div>

    <div class="max-w-7xl mx-auto px-4 mt-8 sm:px-6 lg:px-8 ">
        <h2 class="font-bold">Due Date</h2>
        <p>{{$homework->due_date_time->format('D d-M-Y')}}</p>
    </div>

    <div class="max-w-7xl mx-auto px-4 mt-8 sm:px-6 lg:px-8 ">
        <h2 class="font-bold">Home Work</h2>
        <p class="prose">{{$homework->homework}}</p>
    </div>





@endsection
