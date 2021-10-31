<div class="hidden lg:flex lg:flex-shrink-0">
    <div class="flex flex-col w-64">
        <!-- Sidebar component, swap this element with another sidebar if you like -->
        <div x-data="{features:false}" class="flex flex-col flex-grow bg-cyan-700 pt-5 pb-4 overflow-y-auto">
            <div class="flex items-center justify-between flex-shrink-0 px-4">
                <img class="h-8 w-auto"
                     src="https://tailwindui.com/img/logos/easywire-logo-cyan-300-mark-white-text.svg"
                     alt="Easywire logo">
                <div @click="features=!features">
                    <div x-show="features">
                    <x-icons.snow class="h-6 w-6 text-cyan-200"/>
                    </div>
                    <div x-show="!features">
                    <x-icons.snow class="h-6 w-6 text-cyan-600"/>
                    </div>
                </div>
            </div>
            <nav  class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto"
                 aria-label="Sidebar">
                <div class="px-2 space-y-1">

                    <x-admin.sidebar-nv-item label="Dashboard" route="{{route('admin.home')}}">
                        <x-icons.home class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>
                    </x-admin.sidebar-nv-item>

                    <div x-show="features">
                        <x-admin.sidebar-dd-nav-item label="Appointment">
                            <x-slot name="icon">
                                <x-icons.clock class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>
                            </x-slot>
                            <x-admin.sidebar-dd-nav-subitem label="Appointment" route=""/>
                        </x-admin.sidebar-dd-nav-item>
                    </div>

                    <x-admin.sidebar-dd-nav-item label="Query Management">
                        <x-slot name="icon">
                            <x-icons.user-edit class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>
                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Queries Status"
                                                        route="{{route('admin.queries.dashboard')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="All Queries" route="{{route('admin.queries.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="Create Query" route="{{route('admin.queries.create')}}"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Student Management" route="{{route('admin.students.index')}}">
                        <x-slot name="icon">
<x-icons.users class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>
                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Student Status"/>
                        <x-admin.sidebar-dd-nav-subitem label="Batches"/>
                        <x-admin.sidebar-dd-nav-subitem label="Search" route="{{route('admin.students.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="New Admission"
                                                        route="{{route('admin.students.create')}}"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Academic Management" route="{{route('admin.students.index')}}">
                        <x-slot name="icon">

<x-icons.book class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>

                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Departments"
                                                        route="{{route('admin.departments.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="Academics Status"/>
                        <x-admin.sidebar-dd-nav-subitem label="Manage Courses"
                                                        route="{{route('admin.courses.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="Manage Batches"
                                                        route="{{route('admin.batches.index')}}"/>

                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Notifications">
                        <x-slot name="icon">
                            <x-icons.bell class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>


                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Notifications Status"/>
                        <x-admin.sidebar-dd-nav-subitem label="Send SMS or Email"/>
                        <x-admin.sidebar-dd-nav-subitem label="Search Records"/>
                        <x-admin.sidebar-dd-nav-subitem label="Sms Templates"/>
                        <x-admin.sidebar-dd-nav-subitem label="Email Templates"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Finance Management" route="{{route('admin.students.index')}}">
                        <x-slot name="icon">
                            <x-icons.money class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>

                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Finance Status"/>
                        <x-admin.sidebar-dd-nav-subitem label="Received"/>
                        <x-admin.sidebar-dd-nav-subitem label="Upcoming/Pending"/>
                        <x-admin.sidebar-dd-nav-subitem label="Incomes" route="{{route('admin.incomes.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="Expenses" route="{{route('admin.expenses.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="Accounts" route="{{route('admin.accounts.index')}}"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Employee Management">
                        <x-slot name="icon">

                            <x-icons.id-card class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>

                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Manage Employee" route="{{route('admin.employees.index')}}"/>
                        <x-admin.sidebar-dd-nav-subitem label="Employee Attendance"/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-dd-nav-item label="Asset Management">
                        <x-slot name="icon">
                           <x-icons.box class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>
                        </x-slot>
                        <x-admin.sidebar-dd-nav-subitem label="Categories" route=""/>
                        <x-admin.sidebar-dd-nav-subitem label="Assets" route=""/>
                        <x-admin.sidebar-dd-nav-subitem label="Statuses" route=""/>
                        <x-admin.sidebar-dd-nav-subitem label="Locations" route=""/>
                        <x-admin.sidebar-dd-nav-subitem label="History" route=""/>
                    </x-admin.sidebar-dd-nav-item>

                    <x-admin.sidebar-nv-item label="Reports" route="{{route('admin.students.index')}}">
                        <svg class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"
                             x-description="Heroicon name: outline/document-report" xmlns="http://www.w3.org/2000/svg"
                             fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                        </svg>
                    </x-admin.sidebar-nv-item>

                    <x-admin.sidebar-nv-item label="Calendar" route="{{route('admin.system-calendars.index')}}">
                        <x-icons.calendar class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>
                    </x-admin.sidebar-nv-item>

                </div>

                <div class="mt-6 pt-6">
                    <div class="px-2 space-y-1">
                        <x-admin.sidebar-dd-nav-item label="User Management">
                            <x-slot name="icon">

                                <x-icons.people class="mr-4 flex-shrink-0 h-6 w-6 text-cyan-200"/>

                            </x-slot>
                            <x-admin.sidebar-dd-nav-subitem label="Users" route="{{route('admin.users.index')}}"/>
                            <x-admin.sidebar-dd-nav-subitem label="Roles" route="{{route('admin.roles.index')}}"/>
                            <x-admin.sidebar-dd-nav-subitem label="Permissions"
                                                            route="{{route('admin.permissions.index')}}"/>
                            <x-admin.sidebar-dd-nav-subitem label="Audit" route="{{route('admin.audit-logs.index')}}"/>
                        </x-admin.sidebar-dd-nav-item>

                        <x-admin.sidebar-nv-item label="Settings" route="{{route('admin.settings.index')}}">
                            <x-icons.gear class="mr-4 h-6 w-6 text-cyan-200"/>

                        </x-admin.sidebar-nv-item>

                        <x-admin.sidebar-nv-item label="Profile" route="{{route('profile.show')}}">
                            <x-icons.profile class="mr-4 h-6 w-6 text-cyan-200"/>

                        </x-admin.sidebar-nv-item>

                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
