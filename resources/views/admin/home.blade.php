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
                            <img class="hidden h-16 w-16 rounded-full sm:block"
                                 src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.6&amp;w=256&amp;h=256&amp;q=80"
                                 alt="">
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
                                    <dt class="sr-only">Company</dt>
                                    <dd class="flex items-center text-sm text-gray-500 font-medium capitalize sm:mr-6">
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400"
                                             x-description="Heroicon name: solid/office-building"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-2a1 1 0 00-1-1H9a1 1 0 00-1 1v2a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Duke street studio
                                    </dd>
                                    <dt class="sr-only">Account status</dt>
                                    <dd class="mt-3 flex items-center text-sm text-gray-500 font-medium sm:mr-6 sm:mt-0 capitalize">
                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400"
                                             x-description="Heroicon name: solid/check-circle"
                                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                                             aria-hidden="true">
                                            <path fill-rule="evenodd"
                                                  d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                  clip-rule="evenodd"></path>
                                        </svg>
                                        Verified account
                                    </dd>
                                </dl>
                            </div>
                        </div>
                    </div>
                    <div class="mt-6 flex space-x-3 md:mt-0 md:ml-4">
                        <a href="{{route('admin.queries.create')}}" type="button" class="inline-flex items-center px-4 py-2
                        border
                        border-gray-300
                        shadow-sm
                        text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                            Create Query
                        </a>
                        <a href="{{route('admin.students.create')}}" type="button" class="inline-flex items-center px-4 py-2 border
                        border-transparent
                        shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                            Create Admission
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-8">
            <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
                <div class="mt-2 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
                    <!-- Card -->
                    <x-common.stat-card label="Daily Queries" stat="{{$dQuery}}">
                        <x-slot name="icon">
                            <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>

                    <x-common.stat-card label="New Daily Admission" stat="{{$dStudent}}">
                        <x-slot name="icon">
                            <x-icons.todo-list class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>

                    <x-common.stat-card label="Daily Expense" stat="{{$dExpense}} Rs">
                        <x-slot name="icon">
                            <x-icons.invoice class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card label="Daily Sale" stat="300,000 Rs">
                        <x-slot name="icon">
                            <x-icons.money-check class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>

                    <x-common.stat-card label="Monthly Queries" stat="{{$mQuery}}">
                        <x-slot name="icon">
                            <x-icons.user-comment class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>

                    <x-common.stat-card label="Monthly Admission" stat="{{$mStudent}}">
                        <x-slot name="icon">
                            <x-icons.todo-list class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card label="Monthly Expenses" stat="{{$mExpense}} Rs">
                        <x-slot name="icon">
                            <x-icons.invoice class="w-6 h-6 text-gray-400"/>
                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card label="Monthly Sale" :stat="@money(10000000000)">
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
                <div class="grid grid-cols-3 gap-4 mt-2">
                    <div class="bg-white p-4 rounded-lg">
                        <div>
                            {!! $chart1->renderHtml() !!}
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <div>
                            {!! $chart2->renderHtml() !!}
                        </div>
                    </div>
                    <div class="bg-white p-4 rounded-lg">
                        <div>
                            {!! $chart3->renderHtml() !!}
                        </div>
                    </div>
                </div>
            </div>



                            {!! $chart1->renderChartJsLibrary() !!}
                            {!! $chart1->renderJs() !!}
                            {!! $chart2->renderJs() !!}
                            {!! $chart3->renderJs() !!}
            <h2 class="max-w-6xl mx-auto mt-8 px-4 text-lg leading-6 font-medium text-gray-900 sm:px-6 lg:px-8">
                Recent activity
            </h2>

            <!-- Activity list (smallest breakpoint only) -->
            <div class="shadow sm:hidden">
                <ul role="list" class="mt-2 divide-y divide-gray-200 overflow-hidden shadow sm:hidden">

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Molly Sanders</span>
                          <span><span class="text-gray-900 font-medium">$20,000</span> USD</span>
                          <time datetime="2020-07-11">July 11, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Doug Mann</span>
                          <span><span class="text-gray-900 font-medium">$19,500</span> USD</span>
                          <time datetime="2020-07-05">July 5, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Erica Frost</span>
                          <span><span class="text-gray-900 font-medium">$8,750</span> USD</span>
                          <time datetime="2020-07-04">July 4, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Miley Davis</span>
                          <span><span class="text-gray-900 font-medium">$300</span> USD</span>
                          <time datetime="2020-07-01">July 1, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Molly Sanders</span>
                          <span><span class="text-gray-900 font-medium">$20,000</span> USD</span>
                          <time datetime="2020-06-17">June 17, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Doug Mann</span>
                          <span><span class="text-gray-900 font-medium">$19,500</span> USD</span>
                          <time datetime="2020-06-14">June 14, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Erica Frost</span>
                          <span><span class="text-gray-900 font-medium">$8,750</span> USD</span>
                          <time datetime="2020-06-03">June 3, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Miley Davis</span>
                          <span><span class="text-gray-900 font-medium">$300</span> USD</span>
                          <time datetime="2020-05-08">May 8, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Molly Sanders</span>
                          <span><span class="text-gray-900 font-medium">$20,000</span> USD</span>
                          <time datetime="2020-05-05">May 5, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Doug Mann</span>
                          <span><span class="text-gray-900 font-medium">$19,500</span> USD</span>
                          <time datetime="2020-05-01">May 1, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Erica Frost</span>
                          <span><span class="text-gray-900 font-medium">$8,750</span> USD</span>
                          <time datetime="2020-04-14">April 14, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Miley Davis</span>
                          <span><span class="text-gray-900 font-medium">$300</span> USD</span>
                          <time datetime="2020-04-11">April 11, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Molly Sanders</span>
                          <span><span class="text-gray-900 font-medium">$20,000</span> USD</span>
                          <time datetime="2020-04-03">April 3, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Doug Mann</span>
                          <span><span class="text-gray-900 font-medium">$19,500</span> USD</span>
                          <time datetime="2020-04-02">April 2, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Erica Frost</span>
                          <span><span class="text-gray-900 font-medium">$8,750</span> USD</span>
                          <time datetime="2020-03-29">March 29, 2020</time>
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

                    <li>
                        <a href="#" class="block px-4 py-4 bg-white hover:bg-gray-50">
                    <span class="flex items-center space-x-4">
                      <span class="flex-1 flex space-x-2 truncate">
                        <svg class="flex-shrink-0 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/cash"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
  <path fill-rule="evenodd"
        d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
        clip-rule="evenodd"></path>
</svg>
                        <span class="flex flex-col text-gray-500 text-sm truncate">
                          <span class="truncate">Payment to Miley Davis</span>
                          <span><span class="text-gray-900 font-medium">$300</span> USD</span>
                          <time datetime="2020-03-15">March 15, 2020</time>
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

                </ul>

                <nav class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200"
                     aria-label="Pagination">
                    <div class="flex-1 flex justify-between">
                        <a href="#"
                           class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                            Previous
                        </a>
                        <a href="#"
                           class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:text-gray-500">
                            Next
                        </a>
                    </div>
                </nav>
            </div>

            <!-- Activity table (small breakpoint and up) -->
            <div class="hidden sm:block">
                <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex flex-col mt-2">
                        <div class="align-middle min-w-full overflow-x-auto shadow overflow-hidden sm:rounded-lg">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead>
                                <tr>
                                    <th class="px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Transaction
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Amount
                                    </th>
                                    <th class="hidden px-6 py-3 bg-gray-50 text-left text-xs font-medium text-gray-500 uppercase tracking-wider md:block">
                                        Status
                                    </th>
                                    <th class="px-6 py-3 bg-gray-50 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                                        Date
                                    </th>
                                </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Molly Sanders
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$20,000 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-07-11">July 11, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Doug Mann
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$19,500 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize">
                              processing
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-07-05">July 5, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Erica Frost
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$8,750 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-07-04">July 4, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Miley Davis
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$300 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-07-01">July 1, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Molly Sanders
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$20,000 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 capitalize">
                              failed
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-06-17">June 17, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Doug Mann
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$19,500 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize">
                              processing
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-06-14">June 14, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Erica Frost
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$8,750 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-06-03">June 3, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Miley Davis
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$300 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-05-08">May 8, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Molly Sanders
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$20,000 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-05-05">May 5, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Doug Mann
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$19,500 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize">
                              processing
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-05-01">May 1, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Erica Frost
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$8,750 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-gray-100 text-gray-800 capitalize">
                              failed
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-04-14">April 14, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Miley Davis
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$300 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-04-11">April 11, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Molly Sanders
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$20,000 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-04-03">April 3, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Doug Mann
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$19,500 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 capitalize">
                              processing
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-04-02">April 2, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Erica Frost
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$8,750 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-03-29">March 29, 2020</time>
                                    </td>
                                </tr>

                                <tr class="bg-white">
                                    <td class="max-w-0 w-full px-6 py-4 whitespace-nowrap text-sm text-gray-900">
                                        <div class="flex">
                                            <a href="#" class="group inline-flex space-x-2 truncate text-sm">
                                                <svg
                                                    class="flex-shrink-0 h-5 w-5 text-gray-400 group-hover:text-gray-500"
                                                    x-description="Heroicon name: solid/cash"
                                                    xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                                    fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd"
                                                          d="M4 4a2 2 0 00-2 2v4a2 2 0 002 2V6h10a2 2 0 00-2-2H4zm2 6a2 2 0 012-2h8a2 2 0 012 2v4a2 2 0 01-2 2H8a2 2 0 01-2-2v-4zm6 4a2 2 0 100-4 2 2 0 000 4z"
                                                          clip-rule="evenodd"></path>
                                                </svg>
                                                <p class="text-gray-500 truncate group-hover:text-gray-900">
                                                    Payment to Miley Davis
                                                </p>
                                            </a>
                                        </div>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <span class="text-gray-900 font-medium">$300 </span>
                                        USD
                                    </td>
                                    <td class="hidden px-6 py-4 whitespace-nowrap text-sm text-gray-500 md:block">
                            <span
                                class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 capitalize">
                              success
                            </span>
                                    </td>
                                    <td class="px-6 py-4 text-right whitespace-nowrap text-sm text-gray-500">
                                        <time datetime="2020-03-15">March 15, 2020</time>
                                    </td>
                                </tr>

                                </tbody>
                            </table>
                            <!-- Pagination -->
                            <nav
                                class="bg-white px-4 py-3 flex items-center justify-between border-t border-gray-200 sm:px-6"
                                aria-label="Pagination">
                                <div class="hidden sm:block">
                                    <p class="text-sm text-gray-700">
                                        Showing
                                        <!-- space -->
                                        <span class="font-medium">1</span>
                                        <!-- space -->
                                        to
                                        <!-- space -->
                                        <span class="font-medium">10</span>
                                        <!-- space -->
                                        of
                                        <!-- space -->
                                        <span class="font-medium">20</span>
                                        <!-- space -->
                                        results
                                    </p>
                                </div>
                                <div class="flex-1 flex justify-between sm:justify-end">
                                    <a href="#"
                                       class="relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        Previous
                                    </a>
                                    <a href="#"
                                       class="ml-3 relative inline-flex items-center px-4 py-2 border border-gray-300 text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50">
                                        Next
                                    </a>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
