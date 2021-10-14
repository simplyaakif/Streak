@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="md:flex bg-white px-8 border-t border-gray-200 border-solid py-8 md:items-center md:justify-between">
        <div class="flex-1 min-w-0">
            <h2 class="text-2xl font-bold leading-7 text-gray-900 sm:text-3xl sm:truncate">
                Query Information
            </h2>
        </div>
        <div class="mt-4 flex md:mt-0 md:ml-4">
            <button type="button" class="inline-flex items-center px-4 py-2 border border-gray-300 rounded-md shadow-sm text-sm font-medium text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                Go Back
            </button>
        </div>
    </div>
    <div class="card bg-blueGray-100">
        <!-- This example requires Tailwind CSS v2.0+ -->



        <div class="card-body">
            @livewire('query.create')
        </div>
    </div>
</div>
@endsection
