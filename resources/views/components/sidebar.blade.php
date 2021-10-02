<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div class="flex flex-col flex-grow bg-cyan-700 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center flex-shrink-0 px-4">
                <img class="h-8 w-auto"
                     src="https://tailwindui.com/img/logos/easywire-logo-cyan-300-mark-white-text.svg"
                     alt="Easywire logo">
            </div>
            <nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto" aria-label="Sidebar">
                <div class="px-2 space-y-1">

                    <x-admin.sidebar-nv-item label="Dashboard" route="{{route('admin.home')}}">
                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"
                             x-description="Heroicon name: outline/home" xmlns="http://www.w3.org/2000/svg" fill="none"
                             viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path d="M12 18V15" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            <path d="M10.07 2.82L3.14001 8.37C2.36001 8.99 1.86001 10.3 2.03001 11.28L3.36001 19.24C3.60001 20.66 4.96001 21.81 6.40001 21.81H17.6C19.03 21.81 20.4 20.65 20.64 19.24L21.97 11.28C22.13 10.3 21.63 8.99 20.86 8.37L13.93 2.83C12.86 1.97 11.13 1.97 10.07 2.82Z" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>


                    </x-admin.sidebar-nv-item>

                    <x-admin.sidebar-dd-nav-item label="Query Management">
                        <x-slot name="icon">

                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M19.21 15.74L15.67 19.2801C15.53 19.4201 15.4 19.68 15.37 19.87L15.18 21.22C15.11 21.71 15.45 22.05 15.94 21.98L17.29 21.79C17.48 21.76 17.75 21.63 17.88 21.49L21.42 17.95C22.03 17.34 22.32 16.63 21.42 15.73C20.53 14.84 19.82 15.13 19.21 15.74Z" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.7 16.25C19 17.33 19.84 18.17 20.92 18.47" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M3.40997 22C3.40997 18.13 7.26 15 12 15C13.04 15 14.04 15.15 14.97 15.43" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Queries Status"
                                                        route="{{route('admin.queries.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="All Queries" route="{{route('admin.queries.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="Create Query" route="{{route('admin.queries.create')}}"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Student Management" route="{{route('admin.students.index')}}">
                        <x-slot name="icon">

                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.16 10.87C9.06 10.86 8.94 10.86 8.83 10.87C6.45 10.79 4.56 8.84 4.56 6.44C4.56 3.99 6.54 2 9 2C11.45 2 13.44 3.99 13.44 6.44C13.43 8.84 11.54 10.79 9.16 10.87Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.41 4C18.35 4 19.91 5.57 19.91 7.5C19.91 9.39 18.41 10.93 16.54 11C16.46 10.99 16.37 10.99 16.28 11" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.16 14.56C1.74 16.18 1.74 18.82 4.16 20.43C6.91 22.27 11.42 22.27 14.17 20.43C16.59 18.81 16.59 16.17 14.17 14.56C11.43 12.73 6.92 12.73 4.16 14.56Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.34 20C19.06 19.85 19.74 19.56 20.3 19.13C21.86 17.96 21.86 16.03 20.3 14.86C19.75 14.44 19.08 14.16 18.37 14" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Student Status"/>
                        <x-admin.sidebar-dd-nav-subitem label="Batches"/>
                        <x-admin.sidebar-dd-nav-subitem label="Search" route="{{route('admin.students.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="New Admission"
                                                        route="{{route('admin.students.create')}}"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Academic Management" route="{{route('admin.students.index')}}">
                        <x-slot name="icon">

                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M22 16.74V4.67001C22 3.47001 21.02 2.58001 19.83 2.68001H19.77C17.67 2.86001 14.48 3.93001 12.7 5.05001L12.53 5.16001C12.24 5.34001 11.76 5.34001 11.47 5.16001L11.22 5.01001C9.44 3.90001 6.26 2.84001 4.16 2.67001C2.97 2.57001 2 3.47001 2 4.66001V16.74C2 17.7 2.78 18.6 3.74 18.72L4.03 18.76C6.2 19.05 9.55 20.15 11.47 21.2L11.51 21.22C11.78 21.37 12.21 21.37 12.47 21.22C14.39 20.16 17.75 19.05 19.93 18.76L20.26 18.72C21.22 18.6 22 17.7 22 16.74Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 5.49001V20.49" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M7.75 8.49H5.5" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.5 11.49H5.5" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Academics Status"/>
                        <x-admin.sidebar-dd-nav-subitem label="Manage Courses" route="{{route('admin.courses.index')
                        }}"/>
                        <x-admin.sidebar-dd-nav-subitem label="Manage Batches"
                                                        route="{{route('admin.batches.index')}}"/>

                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Notifications">
                        <x-slot name="icon">
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.02 2.91C8.71 2.91 6.02 5.6 6.02 8.91V11.8C6.02 12.41 5.76 13.34 5.45 13.86L4.3 15.77C3.59 16.95 4.08 18.26 5.38 18.7C9.69 20.14 14.34 20.14 18.65 18.7C19.86 18.3 20.39 16.87 19.73 15.77L18.58 13.86C18.28 13.34 18.02 12.41 18.02 11.8V8.91C18.02 5.61 15.32 2.91 12.02 2.91Z" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round"/>
                                <path d="M13.87 3.2C13.56 3.11 13.24 3.04 12.91 3C11.95 2.88 11.03 2.95 10.17 3.2C10.46 2.46 11.18 1.94 12.02 1.94C12.86 1.94 13.58 2.46 13.87 3.2Z" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15.02 19.06C15.02 20.71 13.67 22.06 12.02 22.06C11.2 22.06 10.44 21.72 9.9 21.18C9.36 20.64 9.02 19.88 9.02 19.06" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10"/>
                            </svg>

                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Notifications Status"/>
                        <x-admin.sidebar-dd-nav-subitem label="Send SMS or Email"/>
                        <x-admin.sidebar-dd-nav-subitem label="Search Records"/>
                        <x-admin.sidebar-dd-nav-subitem label="Sms Templates"/>
                        <x-admin.sidebar-dd-nav-subitem label="Email Templates"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Finance Management" route="{{route('admin.students.index')}}">
                        <x-slot name="icon">
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M19.3 7.91998V13.07C19.3 16.15 17.54 17.47 14.9 17.47H6.10999C5.65999 17.47 5.22999 17.43 4.82999 17.34C4.57999 17.3 4.34 17.23 4.12 17.15C2.62 16.59 1.70999 15.29 1.70999 13.07V7.91998C1.70999 4.83998 3.46999 3.52002 6.10999 3.52002H14.9C17.14 3.52002 18.75 4.47001 19.18 6.64001C19.25 7.04001 19.3 7.44998 19.3 7.91998Z" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M22.3011 10.9201V16.0701C22.3011 19.1501 20.5411 20.4701 17.9011 20.4701H9.11108C8.37108 20.4701 7.70109 20.3701 7.12109 20.1501C5.93109 19.7101 5.12109 18.8001 4.83109 17.3401C5.23109 17.4301 5.66108 17.4701 6.11108 17.4701H14.9011C17.5411 17.4701 19.3011 16.1501 19.3011 13.0701V7.9201C19.3011 7.4501 19.2611 7.03014 19.1811 6.64014C21.0811 7.04014 22.3011 8.38011 22.3011 10.9201Z" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M10.4984 13.1399C11.9565 13.1399 13.1385 11.9579 13.1385 10.4999C13.1385 9.04185 11.9565 7.85986 10.4984 7.85986C9.04041 7.85986 7.85843 9.04185 7.85843 10.4999C7.85843 11.9579 9.04041 13.1399 10.4984 13.1399Z" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M4.78 8.29999V12.7" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.2217 8.30029V12.7003" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Finance Status"/>
                        <x-admin.sidebar-dd-nav-subitem label="Received"/>
                        <x-admin.sidebar-dd-nav-subitem label="Upcoming/Pending"/>
                        <x-admin.sidebar-dd-nav-subitem label="Expenses"/>
                        <x-admin.sidebar-dd-nav-subitem label="Accounts"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Staff Management">
                        <x-slot name="icon">
                            <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 21H7C3 21 2 20 2 16V8C2 4 3 3 7 3H17C21 3 22 4 22 8V16C22 20 21 21 17 21Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M14 8H19" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M15 12H19" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M17 16H19" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M8.5 11.29C9.49964 11.29 10.31 10.4796 10.31 9.48C10.31 8.48036 9.49964 7.67 8.5 7.67C7.50037 7.67 6.69 8.48036 6.69 9.48C6.69 10.4796 7.50037 11.29 8.5 11.29Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 16.33C11.86 14.88 10.71 13.74 9.26 13.61C8.76 13.56 8.25 13.56 7.74 13.61C6.29 13.75 5.14 14.88 5 16.33" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Manage Staff"/>
                        <x-admin.sidebar-dd-nav-subitem label="Staff Attendance"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-nv-item label="Reports" route="{{route('admin.students.index')}}">
                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"
                             x-description="Heroicon name: outline/document-report" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </x-admin.sidebar-nv-item>

                </div>
                <div class="mt-6 pt-6">
                    <div class="px-2 space-y-1">
                        <x-admin.sidebar-dd-nav-item label="User Management">
                            <x-slot name="icon">

                                <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M18 7.16C17.94 7.15 17.87 7.15 17.81 7.16C16.43 7.11 15.33 5.98 15.33 4.58C15.33 3.15 16.48 2 17.91 2C19.34 2 20.49 3.16 20.49 4.58C20.48 5.98 19.38 7.11 18 7.16Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M16.97 14.44C18.34 14.67 19.85 14.43 20.91 13.72C22.32 12.78 22.32 11.24 20.91 10.3C19.84 9.59001 18.31 9.35 16.94 9.59" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M5.97 7.16C6.03 7.15 6.1 7.15 6.16 7.16C7.54 7.11 8.64 5.98 8.64 4.58C8.64 3.15 7.49 2 6.06 2C4.63 2 3.48 3.16 3.48 4.58C3.49 5.98 4.59 7.11 5.97 7.16Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M7 14.44C5.63 14.67 4.12 14.43 3.06 13.72C1.65 12.78 1.65 11.24 3.06 10.3C4.13 9.59001 5.66 9.35 7.03 9.59" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M12 14.63C11.94 14.62 11.87 14.62 11.81 14.63C10.43 14.58 9.33 13.45 9.33 12.05C9.33 10.62 10.48 9.47 11.91 9.47C13.34 9.47 14.49 10.63 14.49 12.05C14.48 13.45 13.38 14.59 12 14.63Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M9.09 17.78C7.68 18.72 7.68 20.26 9.09 21.2C10.69 22.27 13.31 22.27 14.91 21.2C16.32 20.26 16.32 18.72 14.91 17.78C13.32 16.72 10.69 16.72 9.09 17.78Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>

                            </x-slot>
                            <x-admin.sidebar-dd-nav-subitem label="Users" route="{{route('admin.users.index')}}"/>
                            <x-admin.sidebar-dd-nav-subitem label="Roles" route="{{route('admin.roles.index')}}"/>
                            <x-admin.sidebar-dd-nav-subitem label="Permissions"
                                                            route="{{route('admin.permissions.index')}}"/>
                        </x-admin.sidebar-dd-nav-item>

                        <x-admin.sidebar-nv-item label="Settings" route="{{route('admin.students.index')}}">
                            <svg class="mr-4 h-6 w-6 text-cyan-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 15C13.6569 15 15 13.6569 15 12C15 10.3431 13.6569 9 12 9C10.3431 9 9 10.3431 9 12C9 13.6569 10.3431 15 12 15Z" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M2 12.88V11.12C2 10.08 2.85 9.22 3.9 9.22C5.71 9.22 6.45 7.94 5.54 6.37C5.02 5.47 5.33 4.3 6.24 3.78L7.97 2.79C8.76 2.32 9.78 2.6 10.25 3.39L10.36 3.58C11.26 5.15 12.74 5.15 13.65 3.58L13.76 3.39C14.23 2.6 15.25 2.32 16.04 2.79L17.77 3.78C18.68 4.3 18.99 5.47 18.47 6.37C17.56 7.94 18.3 9.22 20.11 9.22C21.15 9.22 22.01 10.07 22.01 11.12V12.88C22.01 13.92 21.16 14.78 20.11 14.78C18.3 14.78 17.56 16.06 18.47 17.63C18.99 18.54 18.68 19.7 17.77 20.22L16.04 21.21C15.25 21.68 14.23 21.4 13.76 20.61L13.65 20.42C12.75 18.85 11.27 18.85 10.36 20.42L10.25 20.61C9.78 21.4 8.76 21.68 7.97 21.21L6.24 20.22C5.33 19.7 5.02 18.53 5.54 17.63C6.45 16.06 5.71 14.78 3.9 14.78C2.85 14.78 2 13.92 2 12.88Z" stroke="#A5F3FC" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-admin.sidebar-nv-item>

                        <x-admin.sidebar-nv-item label="Profile" route="{{route('admin.students.index')}}">
                            <svg class="mr-4 h-6 w-6 text-cyan-200" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12.12 12.78C12.05 12.77 11.96 12.77 11.88 12.78C10.12 12.72 8.72 11.28 8.72 9.51C8.72 7.7 10.18 6.23 12 6.23C13.81 6.23 15.28 7.7 15.28 9.51C15.27 11.28 13.88 12.72 12.12 12.78Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M18.74 19.38C16.96 21.01 14.6 22 12 22C9.4 22 7.04 21.01 5.26 19.38C5.36 18.44 5.96 17.52 7.03 16.8C9.77 14.98 14.25 14.98 16.97 16.8C18.04 17.52 18.64 18.44 18.74 19.38Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22Z" stroke="#A5F3FC" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>

                        </x-admin.sidebar-nv-item>


                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
