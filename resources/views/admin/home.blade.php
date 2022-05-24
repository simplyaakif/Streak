@extends('layouts.admin')
@section('content')
    <main class="flex-1 relative pb-8 z-0 overflow-y-auto">
        <!-- Page header -->
        <div class="bg-white shadow">
            <div class="px-4 sm:px-6 lg:max-w-6xl lg:mx-auto lg:px-8">
                <div class="py-6 md:flex md:items-center md:justify-between lg:border-t lg:border-gray-200">
                    <div class="flex-1 min-w-0">
                        <!-- Profile -->
                        <div class="flex items-center">
                            {{--                            <img class="hidden h-16 w-16 rounded-full sm:block"--}}
                            {{--                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.6&amp;w=256&amp;h=256&amp;q=80"--}}
                            {{--                                 alt="">--}}
                            @forelse(Auth::user()->employee->dp as $key => $entry)
                                {{--                            <a class="link-photo" href="{{ $entry['url'] }}">--}}
                                {{--                                <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">--}}
                                {{--                            </a>--}}
                                <img
                                    class="hidden h-16 w-16 rounded-full sm:block"
                                    src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}"
                                    title="{{ $entry['name'] }}"
                                >
                            @empty
                                <img
                                    class="hidden h-16 w-16 rounded-full sm:block"
                                    src="{{Auth::user()->employee->avatarUrl()}}"
                                    alt="">
                            @endforelse
                            <div>
                                <div class="flex items-center">
                                    <img class="h-16 w-16 rounded-full sm:hidden"
                                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.6&amp;w=256&amp;h=256&amp;q=80"
                                         alt="">
                                    <h1 class="ml-3 text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                                        Good morning, {{Auth::user()->name}}
                                    </h1>
                                </div>
                                <dl class="mt-6 flex flex-col sm:ml-3 sm:mt-1 sm:flex-row sm:flex-wrap">
                                    {{--                                    <dt class="sr-only">Company</dt>--}}
                                    {{--                                    <dd class="flex items-center text-sm text-gray-500 font-medium capitalize sm:mr-6">--}}
                                    {{--                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"--}}
                                    {{--                                             x-description="Heroicon name: solid/office-building"--}}
                                    {{--                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"--}}
                                    {{--                                             aria-hidden="true">--}}
                                    {{--                                            <path fill-rule="evenodd"--}}
                                    {{--                                                  d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"--}}
                                    {{--                                                  clip-rule="evenodd"></path>--}}
                                    {{--                                        </svg>--}}
                                    {{--                                        Duke street studio--}}
                                    {{--                                    </dd>--}}
                                    <dt class="sr-only">Designation</dt>
                                    <dd class="mt-3 flex items-center text-sm text-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400"
                                             x-description="Heroicon name: solid/check-circle"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        {{App\Models\Employee::DESIGNATION[Auth::user()->employee->designation]}}
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                        @can('query_create')
                            <a href="{{route('admin.queries.create')}}" type="button" class="inline-flex items-center px-4 py-2
                        border
                        border-gray-300
                        shadow-sm
                        text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                Create Query
                            </a>
                        @endcan

                        @can('student_create')
                            <a href="{{route('admin.students.create')}}" type="button" class="inline-flex items-center px-4 py-2 border
                        border-transparent
                        shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                Create Admission
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg leading-6 font-medium text-gray-900 mb-2">Tasks For {{Auth::user()->name}}</h2>
                <div class="bg-yellow-100 border-yellow-400 border rounded-lg py-4 px-8">
                    <ul class="list-decimal text-gray-700 divide-y divide-yellow-200 space-y-2">
                        @forelse($user_tasks as $task)
                            <li class="w-full items-center">
                                <div class=" grid grid-cols-1 md:grid-cols-6 items-center ">
                                    <div class="md:col-span-4">
                                        <h3 class="text-base">{{$task->name}}</h3>
                                        <p class="text-sm">{{$task->description}}</p>
                                    </div>
                                    <div>
                                        <div class="flex space-x-2">
                                        {{$task->status->name}}
                                            <span>
                                                <a
                                                onclick = "if (! confirm('Did you Actually Completed?')) { return false; }"
                                                   href="{{route('admin.task_done',$task->id)}}">
                                                <x-icons.add class="w-6 h-6"/>
                                                </a>
                                            </span>
                                        </div>
                                        <div>
                                            @forelse($task->tag as $tag)
                                            <span class="text-sm  text-yellow-600">{{$tag->name}}</span>
                                            @empty
                                            @endforelse
                                        </div>
                                    </div>
                                    <div class="text-sm">
                                        Due by <span class="">{{carbon($task->due_date)->format('d-m-Y')}}</span>
                                    </div>
                                </div>
                            </li>
                        @empty
                            <li class="flex">No Task Assigned to You</li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
                <div class="mt-2 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
                    <!-- Card -->
                    <x-common.stat-card can="view_daily_queries" label="Daily Queries" stat="{{$dQuery}}">
                        <x-slot name="icon">
                            <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>

                    <x-common.stat-card can="view_daily_admission" label="New Daily Admission" stat="{{$dStudent}}">
                        <x-slot name="icon">
                            <x-icons.todo-list class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>

                    <x-common.stat-card can="view_daily_expenses" label="Daily Expense" stat="{{$dExpense}} Rs">
                        <x-slot name="icon">
                            <x-icons.invoice class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card can="view_daily_sale" label="Daily Sale" stat="{{$dSale}} Rs">
                        <x-slot name="icon">
                            <x-icons.money-check class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>

                    <x-common.stat-card can="view_monthly_queries" label="Monthly Queries" stat="{{$mQuery}}">
                        <x-slot name="icon">
                            <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>

                    <x-common.stat-card can="view_monthly_admission" label="Monthly Admission" stat="{{$mStudent}}">
                        <x-slot name="icon">
                            <x-icons.todo-list class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card can="view_monthly_expenses" label="Monthly Expenses" stat="{{$mExpense}} Rs">
                        <x-slot name="icon">
                            <x-icons.invoice class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card can="view_monthly_sale" label="Monthly Sale" :stat="$mSale">
                        <x-slot name="icon">
                            <x-icons.money-check class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>
                </div>
            </div>

            <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
                Recent activity
            </h2>
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5 mt-2">
                    @can('query_show')
                        <div class="bg-white p-4 rounded-lg">
                            <div>
                                {!! $chart1->renderHtml() !!}
                            </div>
                        </div>
                    @endcan
                    @can('student_show')
                        <div class="bg-white p-4 rounded-lg">
                            <div>
                                {!! $chart2->renderHtml() !!}
                            </div>
                        </div>
                    @endcan
                    @can('expense_show')
                        <div class="bg-white p-4 rounded-lg">
                            <div>
                                {!! $chart3->renderHtml() !!}
                            </div>
                        </div>
                    @endcan
                    {{--                    @can('recovery_show')--}}
                    {{--                        <div class="bg-white p-4 rounded-lg">--}}
                    {{--                            <div>--}}
                    {{--                                {!! $chart4->renderHtml() !!}--}}
                    {{--                            </div>--}}
                    {{--                        </div>--}}
                    {{--                    @endcan--}}
                </div>
            </div>

            {!! $chart1->renderChartJsLibrary() !!}
            {!! $chart1->renderJs() !!}
            {!! $chart2->renderJs() !!}
            {!! $chart3->renderJs() !!}
            {{--            {!! $chart4->renderJs() !!}--}}

            <div class="max-w-6xl mt-8 mx-auto px-4 sm:px-6 lg:px-8">

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    @can('query_show')

                        <div>
                            <h2 class="text-lg leading-6 font-medium text-gray-900 ">
                                Recent Queries
                            </h2>
                            <!-- Activity list (smallest breakpoint only) -->
                            <div class="shadow sm:hidden">
                                <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                                    @forelse($rQueries as $query)
                                        <li>
                                            <a href="{{route('admin.queries.show',$query->id)}}" class="block px-4 py-4
                                    bg-white
                                    hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                          <x-icons.user-comment class="flex-shrink-0 h-5 w-5 text-gray-400"/>

                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">{{$query->name}}</span>
                          <span><span class="text-gray-900 font-medium">{{$query->course->title}}</span> </span>
                          <span class="text-xs">{{$query->entry_by}}</span>
                        </span>
                      </span>
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                           x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg"
                           viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd"></path>
</svg>
                    </span>
                                            </a>
                                        </li>
                                    @empty
                                        <li>
                                            No Query in System
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                            <!-- Activity table (small breakpoint and up) -->
                            <div class="hidden sm:block">
                                <div class="">
                                    <div class="flex flex-col mt-2">
                                        <div
                                            class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead>
                                                <tr>
                                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Name
                                                    </th>
                                                    <th class=" px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                        Course
                                                    </th>
                                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Added By
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                @forelse($rQueries as $query)
                                                    <tr class="bg-white">
                                                        <td class=" w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            <div class="flex flex-col">
                                                        <span>
                                                            {{$query->name}}
                                                        </span>
                                                                <span class="text-xs">
                                                        {{$query->mobile}}
                                                        </span>
                                                            </div>

                                                        </td>
                                                        <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                            {{$query->course->title}}
                                                        </td>
                                                        <td class="max-w-0 px-6 py-4 text-right whitespace-nowrap text-xs truncate
                                                text-gray-500">
                                                            {{$query->entry_by}}
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                @endforelse

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @can('student_show')

                        <div>
                            <h2 class="  text-lg leading-6 font-medium text-gray-900">
                                Recent Admissions
                            </h2>
                            <!-- Activity list (smallest breakpoint only) -->
                            <div class="shadow sm:hidden">
                                <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                                    @forelse($rAdmissions as $admission)
                                        <li>
                                            <a href="{{route('admin.queries.show',$query->id)}}" class="block px-4 py-4
                                    bg-white
                                    hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                          <x-icons.user-comment class="flex-shrink-0 h-5 w-5 text-gray-400"/>

                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">{{$admission->name}}</span>
                          <span><span class="text-gray-900 font-medium">{{$query->course->title}}</span> </span>
                          <span class="text-xs">{{$query->entry_by}}</span>
                        </span>
                      </span>
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                           x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg"
                           viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd"></path>
</svg>
                    </span>
                                            </a>
                                        </li>
                                    @empty
                                        <li>
                                            No Query in System
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                            <!-- Activity table (small breakpoint and up) -->
                            <div class="hidden sm:block">
                                <div class="">
                                    <div class="flex flex-col mt-2">
                                        <div
                                            class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead>
                                                <tr>
                                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Name
                                                    </th>
                                                    <th class=" px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                        Course
                                                    </th>
                                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Added By
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                @forelse($rAdmissions as $admission)
                                                    <tr class="bg-white">
                                                        <td class=" w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            <div class="flex flex-col">
                                                        <span>
                                                            {{$admission->name}}
                                                        </span>
                                                                <span class="text-xs">
                                                        {{$admission->mobile}}
                                                        </span>
                                                            </div>

                                                        </td>
                                                        <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                                                            {{$query->course->title}}
                                                        </td>
                                                        <td class="max-w-0 px-6 py-4 text-right whitespace-nowrap text-xs truncate
                                                text-gray-500">
                                                            {{$query->entry_by}}
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="3">
                                                            <div class="p-2 text-gray-500 text-center">
                                                                No Student in the System
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforelse

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan
                    @can('expense_show')

                        <div>
                            <h2 class="  text-lg leading-6 font-medium text-gray-900">
                                Recent Expenses
                            </h2>
                            <!-- Activity list (smallest breakpoint only) -->
                            <div class="shadow sm:hidden">
                                <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">
                                    @forelse($rExpenses as $expense)
                                        <li>
                                            <a href="{{route('admin.queries.show',$expense->id)}}" class="block px-4 py-4
                                    bg-white
                                    hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                          <x-icons.user-comment class="flex-shrink-0 h-5 w-5 text-gray-400"/>

                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">{{$expense->vendor->name}}</span>
                          <span><span class="text-gray-900 font-medium">{{$expense->amount}} Rs</span> </span>
                          <span class="text-xs">{{Carbon\Carbon::parse($expense->due_date)->diffForHumans()}}</span>
                        </span>
                      </span>
                      <svg class="flex-shrink-0 h-5 w-5 text-gray-400"
                           x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg"
                           viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
  <path fill-rule="evenodd"
        d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
        clip-rule="evenodd"></path>
</svg>
                    </span>
                                            </a>
                                        </li>
                                    @empty
                                        <li>
                                            No Expense in System
                                        </li>
                                    @endforelse
                                </ul>
                            </div>
                            <!-- Activity table (small breakpoint and up) -->
                            <div class="hidden sm:block">
                                <div class="">
                                    <div class="flex flex-col mt-2">
                                        <div
                                            class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                                            <table class="min-w-full divide-y divide-gray-200">
                                                <thead>
                                                <tr>
                                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Vendor
                                                    </th>
                                                    <th class=" px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                        Amount
                                                    </th>
                                                    <th class=" px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider ">
                                                        Paid Status
                                                    </th>
                                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                                        Due Date
                                                    </th>
                                                </tr>
                                                </thead>
                                                <tbody class="bg-white divide-y divide-gray-200">
                                                @forelse($rExpenses as $expense)
                                                    <tr class="bg-white">
                                                        <td class=" w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                                            <div class="flex flex-col">
                                                        <span>
                                                            {{$expense->vendor->name}}
                                                        </span>
                                                                <span class="text-xs">
                                                        {{$expense->vendor->mobile}}
                                                        </span>
                                                            </div>

                                                        </td>
                                                        <td class=" px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{$expense->amount}} Rs
                                                        </td>
                                                        <td class=" px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                                                            {{$expense->is_paid_human}}
                                                        </td>
                                                        <td class=" px-6 py-4 text-right whitespace-nowrap text-xs
                                                text-gray-500">
                                                            @if(!$expense->is_paid)
                                                                {{Carbon\Carbon::parse($expense->due_date)->diffForHumans()}}
                                                            @else
                                                                Paid
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td></td>
                                                    </tr>
                                                @endforelse

                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endcan

                </div>
            </div>

        </div>
    </main>

@endsection
