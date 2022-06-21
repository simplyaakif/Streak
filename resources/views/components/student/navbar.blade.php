<!-- This example requires Tailwind CSS v2.0+ -->
@impersonating($guard = null)
<a href="{{ route('impersonate.leave') }}">
    <div class="bg-red-600 p-2 text-center text-white">Leave Impersonation</div>
</a>
@endImpersonating
<nav x-data="{mobile:false}" class="bg-cyan-700 relative z-10">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16">
            <div class="flex items-center">
                <div class="flex-shrink-0">
                    {{--                    <img class="block lg:hidden h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-500.svg" alt="Workflow">--}}
                    {{--                    <img class="hidden lg:block h-8 w-auto" src="https://tailwindui.com/img/logos/workflow-logo-indigo-500-mark-white-text.svg" alt="Workflow">--}}
                    <x-logo-ace class="w-20 h-20 "/>
                </div>
                <div class="hidden sm:block sm:ml-6">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                        <x-student.nb-md-item route="{{route('student.dashboard')}}">Dashboard</x-student.nb-md-item>
{{--                        <x-student.nb-md-item route="{{route('student.courses')}}">My Courses</x-student.nb-md-item>--}}
                        <x-student.nb-md-item route="{{route('student.issues')}}">Request Support</x-student.nb-md-item>
{{--                        <x-student.nb-md-item route="{{route('student.discussions')}}">Discussions--}}
{{--                        </x-student.nb-md-item>--}}
                        <x-student.nb-md-item route="{{route('student.institute_calendar')}}">
                            Institute Calendar</x-student.nb-md-item>
                    </div>
                </div>
            </div>
            <div class="hidden sm:ml-6 sm:block">
                <div class="flex items-center">
{{--                    <a href="{{route('chatify')}}">--}}

{{--                    <button type="button" class="bg-cyan-700 mr-4 relative p-1 rounded-full text-cyan-100--}}
{{--                    hover:text-white--}}
{{--                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">--}}
{{--                        <span class="sr-only">View notifications</span>--}}
{{--                        <!-- Heroicon name: outline/bell -->--}}
{{--                        @if(count(Auth::user()->chat_message()))--}}
{{--                            <span class="absolute right-0 top-0 bg-white flex justify-center items-center text-cyan-700--}}
{{--                            rounded-full--}}
{{--                text-xs w-4 h-4">--}}
{{--                    {{count(Auth::user()->chat_message())}}--}}
{{--                </span>--}}
{{--                        @else--}}
{{--                        @endif--}}
{{--                        <x-icons.message class="w-6 h-6 text-white"/>--}}
{{--                    </button>--}}
{{--                    </a>--}}

                    <button type="button" class="bg-cyan-700 p-1 rounded-full text-cyan-100 hover:text-white
                    focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                        <span class="sr-only">View notifications</span>
                        <!-- Heroicon name: outline/bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                        </svg>
                    </button>

                    <!-- Profile dropdown -->
                    <div x-data="{menu:false}" class="ml-3 relative">
                        <div x-on:click="menu=!menu" @click.away="menu=false" @keydown.escape="menu=false">
                            <button type="button"
                                    class="bg-gray-800 flex text-sm rounded-full focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white"
                                    id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                <span class="sr-only">Open user menu</span>
                                <img class="h-8 w-8 rounded-full"
                                     src="{{Auth::user()->student->avatarUrl()}}"
                                     alt="">
                            </button>
                        </div>

                        <!--
                          Dropdown menu, show/hide based on menu state.

                          Entering: "transition ease-out duration-100"
                            From: "transform opacity-0 scale-95"
                            To: "transform opacity-100 scale-100"
                          Leaving: "transition ease-in duration-75"
                            From: "transform opacity-100 scale-100"
                            To: "transform opacity-0 scale-95"
                        -->
                        <div x-show="menu"
                             x-transition:enter="transition ease-out duration-300"
                             x-transition:enter-start="opacity-0 transform scale-90"
                             x-transition:enter-end="opacity-100 transform scale-100"
                             x-transition:leave="transition ease-in duration-300"
                             x-transition:leave-start="opacity-100 transform scale-100"
                             x-transition:leave-end="opacity-0 transform scale-90"
                             class="origin-top-right absolute right-0 mt-2 w-48 rounded-md
                        shadow-lg py-1
                        bg-white
                        ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical"
                             aria-labelledby="user-menu-button" tabindex="-1">
                            <!-- Active: "bg-gray-100", Not Active: "" -->
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"
                               id="user-menu-item-0">Your Profile</a>
{{--                            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1"--}}
{{--                               id="user-menu-item-1">Settings</a>--}}
                            <a href="#"
                               onclick="event.preventDefault(); document.getElementById('logoutform').submit();"
                               class="block px-4 py-2 text-sm text-gray-700" role="menuitem"
                               tabindex="-1" id="user-menu-item-2">Sign out</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="-mr-2 flex sm:hidden">
                <!-- Mobile menu button -->
                <button @click="mobile=!mobile" type="button" class="inline-flex items-center justify-center p-2
                rounded-md
                text-gray-400
                hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                        aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!--
                      Icon when menu is closed.

                      Heroicon name: outline/menu

                      Menu open: "hidden", Menu closed: "block"
                    -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <!--
                      Icon when menu is open.

                      Heroicon name: outline/x

                      Menu open: "block", Menu closed: "hidden"
                    -->
                    <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu, show/hide based on menu state. -->
    <div x-show="mobile"
         {{--         x-transition--}}
         {{--         x-transition:enter="transition ease-in-out duration-300"--}}
         {{--         x-transition:enter-start="transform opacity-0 scale-95"--}}
         {{--         x-transition:enter-end="transform opacity-100 scale-100"--}}
         {{--         x-transition:leave="transition ease-in-out duration-200"--}}
         {{--         x-transition:leave-start="transform opacity-100 scale-100"--}}
         {{--         x-transition:leave-end="transform opacity-0 scale-95"--}}
         class="sm:hidden" id="mobile-menu">
        <div class="px-2 pt-2 pb-3 space-y-1">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
            <a href="{{route('student.dashboard')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Dashboard</a>
            <a href="{{route('student.issues')}}" class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Request Support</a>
            <a href="{{route('student.institute_calendar')}}"
               class="text-gray-300 hover:bg-gray-700 hover:text-white block px-3 py-2 rounded-md text-base font-medium">Calendar</a>
        </div>
        <div class="pt-4 pb-3 border-t border-gray-700">
            <div class="flex items-center px-5">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full"
                         src="{{Auth::user()->student->avatarUrl()}}"
                         alt="">
                </div>
                <div class="ml-3">
                    <div class="text-base font-medium text-white">{{Auth::user()->name}}</div>
                    <div class="text-sm font-medium text-gray-400">{{Auth::user()->email}}</div>
                </div>
                <button type="button"
                        class="ml-auto flex-shrink-0 bg-gray-800 p-1 rounded-full text-gray-400 hover:text-white focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-800 focus:ring-white">
                    <span class="sr-only">View notifications</span>
                    <!-- Heroicon name: outline/bell -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"/>
                    </svg>
                </button>
            </div>
            <div class="mt-3 px-2 space-y-1">
                <a href="#"
                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Your
                    Profile</a>
{{--                <a href="#"--}}
{{--                   class="block px-3 py-2 rounded-md text-base font-medium text-gray-400 hover:text-white hover:bg-gray-700">Settings</a>--}}
                <a href="#" onclick="event.preventDefault(); document.getElementById('logoutform').submit();" class="block px-3 py-2 rounded-md text-base font-medium text-gray-400
                hover:text-white hover:bg-gray-700">Sign out</a>
            </div>
        </div>
    </div>
</nav>
