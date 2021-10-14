@extends('layouts.admin')
@section('content')

    <x-common.page-header>
        <div class="">

            <h1 class="text-2xl font-bold leading-7 text-gray-900 sm:leading-9 sm:truncate">
                Queries Dashboard
            </h1>
            <p class="text-sm text-gray-500">Queries Reports and Sub Reports</p>
        </div>
    </x-common.page-header>

    <x-common.layout-subpage>
        <div class="divide-y">

            <div>
                <h2 class="text-lg leading-6 font-medium text-gray-900">Overview</h2>
                <div class="mt-2 grid grid-cols-2 gap-5 sm:grid-cols-3 lg:grid-cols-4">
                    <x-common.stat-card label="Daily Queries" stat="37">
                        <x-slot name="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z"
                                    stroke="#9CA3AF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path
                                    d="M12 10C13.2868 10 14.33 8.95681 14.33 7.66998C14.33 6.38316 13.2868 5.34003 12 5.34003C10.7132 5.34003 9.66998 6.38316 9.66998 7.66998C9.66998 8.95681 10.7132 10 12 10Z"
                                    stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 15.66C16 13.86 14.21 12.4 12 12.4C9.79 12.4 8 13.86 8 15.66"
                                      stroke="#9CA3AF"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card label="Weekly Queries" stat="37">
                        <x-slot name="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z"
                                    stroke="#9CA3AF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path
                                    d="M12 10C13.2868 10 14.33 8.95681 14.33 7.66998C14.33 6.38316 13.2868 5.34003 12 5.34003C10.7132 5.34003 9.66998 6.38316 9.66998 7.66998C9.66998 8.95681 10.7132 10 12 10Z"
                                    stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 15.66C16 13.86 14.21 12.4 12 12.4C9.79 12.4 8 13.86 8 15.66"
                                      stroke="#9CA3AF"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card label="Montly Queries" stat="37">
                        <x-slot name="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z"
                                    stroke="#9CA3AF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path
                                    d="M12 10C13.2868 10 14.33 8.95681 14.33 7.66998C14.33 6.38316 13.2868 5.34003 12 5.34003C10.7132 5.34003 9.66998 6.38316 9.66998 7.66998C9.66998 8.95681 10.7132 10 12 10Z"
                                    stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 15.66C16 13.86 14.21 12.4 12 12.4C9.79 12.4 8 13.86 8 15.66"
                                      stroke="#9CA3AF"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-slot>
                    </x-common.stat-card>
                    <x-common.stat-card label="Last Month Queries" stat="37">
                        <x-slot name="icon">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M18 18.86H17.24C16.44 18.86 15.68 19.17 15.12 19.73L13.41 21.42C12.63 22.19 11.36 22.19 10.58 21.42L8.87 19.73C8.31 19.17 7.54 18.86 6.75 18.86H6C4.34 18.86 3 17.53 3 15.89V4.97998C3 3.33998 4.34 2.01001 6 2.01001H18C19.66 2.01001 21 3.33998 21 4.97998V15.89C21 17.52 19.66 18.86 18 18.86Z"
                                    stroke="#9CA3AF" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"
                                    stroke-linejoin="round"/>
                                <path
                                    d="M12 10C13.2868 10 14.33 8.95681 14.33 7.66998C14.33 6.38316 13.2868 5.34003 12 5.34003C10.7132 5.34003 9.66998 6.38316 9.66998 7.66998C9.66998 8.95681 10.7132 10 12 10Z"
                                    stroke="#9CA3AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16 15.66C16 13.86 14.21 12.4 12 12.4C9.79 12.4 8 13.86 8 15.66"
                                      stroke="#9CA3AF"
                                      stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-slot>
                    </x-common.stat-card>
                </div>
            </div>

            <div class="mt-8 pt-8 pb-16">
                <h2 class="text-lg leading-6 font-medium text-gray-900">Records</h2>
                <main class="bg-white px-4 py-2  rounded mt-4 ">
                    <div class="px-4 sm:px-0">

                        <!-- Tabs -->
                        <div class="sm:hidden">
                            <label for="tabs" class="sr-only">Select a tab</label>
                            <!-- Use an "onChange" listener to redirect the user to the selected tab URL. -->
                            <select id="tabs" name="tabs" class="mt-4 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-purple-500 focus:border-cyan-500 sm:text-sm rounded-md">

                                <option>Recent Queries</option>

                                <option>Previous Queries</option>

                                <option selected="">Interview</option>

                                <option>Offer</option>

                                <option>Disqualified</option>

                            </select>
                        </div>
                        <div class="hidden sm:block">
                            <div class="border-b border-gray-200">
                                <nav class="mt-2 -mb-px flex space-x-8" aria-label="Tabs">

                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;border-cyan-500 text-purple-600&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;">
                                        Applied

                                        <span class="bg-gray-100 text-gray-900 hidden ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block" x-state:on="Current" x-state:off="Default" x-state-description="Current: &quot;bg-purple-100 text-purple-600&quot;, Default: &quot;bg-gray-100 text-gray-900&quot;">2</span>
                                    </a>

                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" x-state-description="undefined: &quot;border-cyan-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;">
                                        Phone Screening

                                        <span class="bg-gray-100 text-gray-900 hidden ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block" x-state-description="undefined: &quot;bg-purple-100 text-purple-600&quot;, undefined: &quot;bg-gray-100 text-gray-900&quot;">4</span>
                                    </a>

                                    <a href="#" class="border-cyan-500 text-purple-600 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" x-state-description="undefined: &quot;border-cyan-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;">
                                        Interview

                                        <span class="bg-purple-100 text-purple-600 hidden ml-2 py-0.5 px-2.5 rounded-full text-xs font-medium md:inline-block" x-state-description="undefined: &quot;bg-purple-100 text-purple-600&quot;, undefined: &quot;bg-gray-100 text-gray-900&quot;">6</span>
                                    </a>

                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" x-state-description="undefined: &quot;border-cyan-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;">
                                        Offer
                                    </a>

                                    <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm" x-state-description="undefined: &quot;border-cyan-500 text-purple-600&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200&quot;">
                                        Disqualified
                                    </a>

                                </nav>
                            </div>
                        </div>
                    </div>

                    <!-- Stacked list -->
                    <ul role="list" class="mt-5 border-t border-gray-200 divide-y divide-gray-200 sm:mt-0 sm:border-t-0">

                        <li>
                            <a href="#" class="group block">
                                <div class="flex items-center py-5 px-4 sm:py-6 sm:px-0">
                                    <div class="min-w-0 flex-1 flex items-center">
                                        <div class="flex-shrink-0">
                                            <img class="h-12 w-12 rounded-full group-hover:opacity-75" src="https://images.unsplash.com/photo-1502685104226-ee32379fefbe?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2&amp;w=256&amp;h=256&amp;q=80" alt="">
                                        </div>
                                        <div class="min-w-0 flex-1 px-4 md:grid md:grid-cols-2 md:gap-4">
                                            <div>
                                                <p class="text-sm font-medium text-purple-600 truncate">Emily Selman</p>
                                                <p class="mt-2 flex items-center text-sm text-gray-500">
                                                    <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                        <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                                    </svg>
                                                    <span class="truncate">emilyselman@example.com</span>
                                                </p>
                                            </div>
                                            <div class="hidden md:block">
                                                <div>
                                                    <p class="text-sm text-gray-900">
                                                        Applied on
                                                        <!-- space -->
                                                        <time datetime="2020-07-01T15:34:56">January 7, 2020</time>
                                                    </p>
                                                    <p class="mt-2 flex items-center text-sm text-gray-500">
                                                        <svg class="flex-shrink-0 mr-1.5 h-5 w-5 text-green-400" x-description="Heroicon name: solid/check-circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                                                        </svg>
                                                        Completed phone screening
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <svg class="h-5 w-5 text-gray-400 group-hover:text-gray-700" x-description="Heroicon name: solid/chevron-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                            <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                </div>
                            </a>
                        </li>


                    </ul>

                    <!-- Pagination -->
                    <nav class="border-t border-gray-200 px-4 flex items-center justify-between sm:px-0" aria-label="Pagination">
                        <div class="-mt-px w-0 flex-1 flex">
                            <a href="#" class="border-t-2 border-transparent pt-4 pr-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-200">
                                <svg class="mr-3 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/arrow-narrow-left" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M7.707 14.707a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 1.414L5.414 9H17a1 1 0 110 2H5.414l2.293 2.293a1 1 0 010 1.414z" clip-rule="evenodd"></path>
                                </svg>
                                Previous
                            </a>
                        </div>
                        <div class="hidden md:-mt-px md:flex">
                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
                                1
                            </a>
                            <!-- Current: "border-cyan-500 text-purple-600", Default: "border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200" -->
                            <a href="#" class="border-cyan-500 text-purple-600 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium" aria-current="page">
                                2
                            </a>
                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
                                3
                            </a>
                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
                                4
                            </a>
                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
                                5
                            </a>
                            <a href="#" class="border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-200 border-t-2 pt-4 px-4 inline-flex items-center text-sm font-medium">
                                6
                            </a>
                        </div>
                        <div class="-mt-px w-0 flex-1 flex justify-end">
                            <a href="#" class="border-t-2 border-transparent pt-4 pl-1 inline-flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-200">
                                Next
                                <svg class="ml-3 h-5 w-5 text-gray-400" x-description="Heroicon name: solid/arrow-narrow-right" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path fill-rule="evenodd" d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                </svg>
                            </a>
                        </div>
                    </nav>
                </main>
            </div>
        </div>

    </x-common.layout-subpage>

@endsection
