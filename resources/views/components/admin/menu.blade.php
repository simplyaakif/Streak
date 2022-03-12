<nav class="mt-5 flex-1 flex flex-col divide-y divide-cyan-800 overflow-y-auto"
     aria-label="Sidebar">
    <div class="px-2 space-y-1">
        <x-admin.sidebar-nv-item
            can="dashboard_access"
            label="Dashboard"
            route="{{route('admin.home')}}">
            <x-icons.home class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
        </x-admin.sidebar-nv-item>

{{--        <div x-show="features">--}}
{{--            <x-admin.sidebar-dd-nav-item label="Appointment">--}}
{{--                <x-slot name="icon">--}}
{{--                    <x-icons.clock class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>--}}
{{--                </x-slot>--}}
{{--                <x-admin.sidebar-dd-nav-subitem label="Appointment" route=""/>--}}
{{--            </x-admin.sidebar-dd-nav-item>--}}
{{--        </div>--}}

        <x-admin.sidebar-dd-nav-item
            can="query_management_access"
            label="Query Management">
            <x-slot name="icon">
                <x-icons.user-edit class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
            </x-slot>
            <x-admin.sidebar-dd-nav-subitem
                can="query_access"
                label="Queries Status"
                route="{{route('admin.queries.dashboard')}}"/>
            <x-admin.sidebar-dd-nav-subitem
                can="query_follow"
                label="Follow Ups"
                route="{{route('admin.queries.follow')}}"/>
            <x-admin.sidebar-dd-nav-subitem
                can="query_access"
                label="All Queries"
                route="{{route('admin.queries.index')}}"/>
            <x-admin.sidebar-dd-nav-subitem
                can="query_create"
                label="Create Query" route="{{route('admin.queries.create')}}"/>
        </x-admin.sidebar-dd-nav-item>

        <x-admin.sidebar-dd-nav-item
            can="student_management_access"
            label="Student Management" route="{{route('admin.students.index')}}">
            <x-slot name="icon">
                <x-icons.users class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
            </x-slot>
            <x-admin.sidebar-dd-nav-subitem
                route="{{route('admin.students.dashboard')}}"
                can="student_access"
                label="Student Status"/>
            <x-admin.sidebar-dd-nav-subitem label="Classrooms" :route="route('admin.students.classrooms')"/>
            <x-admin.sidebar-dd-nav-subitem
                can="student_access"
                label="All Admissions" route="{{route('admin.students.index')
                        }}"/>
            <x-admin.sidebar-dd-nav-subitem
                can="student_create"
                label="Create Admission"
                route="{{route('admin.students.create')}}"/>

            <x-admin.sidebar-dd-nav-subitem
                can=""
                label="Generate Student Card"
                route=""/>

            <x-admin.sidebar-dd-nav-subitem
                can=""
                label="Generate Certificate"
                :route="route('admin.certificates.index')"/>

        </x-admin.sidebar-dd-nav-item>

        <x-admin.sidebar-dd-nav-item
            can="academic_access"
            label="Academic Management"
            route="{{route('admin.students.index')}}">
            <x-slot name="icon">
                <x-icons.book class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
            </x-slot>
            <x-admin.sidebar-dd-nav-subitem
                can="academic_access"
                label="Academics Status"/>
            <x-admin.sidebar-dd-nav-subitem
                can="department_access"
                label="Departments"
                route="{{route('admin.departments.index')}}"/>
            <x-admin.sidebar-dd-nav-subitem
                can="course_access"
                label="Manage Courses"
                route="{{route('admin.courses.index')}}"/>
            <x-admin.sidebar-dd-nav-subitem
                can="batch_access"
                label="Manage Batches"
                route="{{route('admin.batches.index')}}"/>
        </x-admin.sidebar-dd-nav-item>

        <x-admin.sidebar-dd-nav-item
            can="notifications_management_access"
            label="Notifications">
            <x-slot name="icon">
                <x-icons.bell class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
            </x-slot>
            <x-admin.sidebar-dd-nav-subitem label="Notifications Status"/>
            <x-admin.sidebar-dd-nav-subitem label="Send SMS or Email"/>
            <x-admin.sidebar-dd-nav-subitem label="Search Records"/>
            <x-admin.sidebar-dd-nav-subitem label="Sms Templates"/>
            <x-admin.sidebar-dd-nav-subitem label="Email Templates"/>
        </x-admin.sidebar-dd-nav-item>

        <x-admin.sidebar-dd-nav-item
            can="finance_management_access"
            label="Finance Management"
            route="{{route('admin.students.index')}}">
            <x-slot name="icon">
                <x-icons.money class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
            </x-slot>
            <x-admin.sidebar-dd-nav-subitem
                can="finance_access"
                :route="route('admin.finance.dashboard')"
                label="Finance Status"/>
            <x-admin.sidebar-dd-nav-subitem label="Received" :route="route('admin.recovery.index')"/>
            <x-admin.sidebar-dd-nav-subitem label="Upcoming/Pending"
                                            :route="route('admin.recovery.received')"/>
            <x-admin.sidebar-dd-nav-subitem
                can="income_access"
                label="Incomes"
                route="{{route('admin.incomes.index')}}"/>
            <x-admin.sidebar-dd-nav-subitem
                can="expense_access"
                label="Expenses"
                route="{{route('admin.expenses.index')}}"/>
            <x-admin.sidebar-dd-nav-subitem
                label="Expense Vendors"
                route="{{route('admin.vendors.index')}}"/>
            <x-admin.sidebar-dd-nav-subitem
                label="Accounts"
                route="{{route('admin.accounts.index')}}"/>
        </x-admin.sidebar-dd-nav-item>

        <x-admin.sidebar-dd-nav-item can="employee_management_access" label="Employee Management">
            <x-slot name="icon">
                <x-icons.id-card class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
            </x-slot>
            <x-admin.sidebar-dd-nav-subitem
                can="employee_access"
                label="Manage Employee"
                route="{{route('admin.employees.index')}}"/>
            <x-admin.sidebar-dd-nav-subitem label="Employee Attendance"/>
        </x-admin.sidebar-dd-nav-item>

        <x-admin.sidebar-dd-nav-item can="task_management_access" label="Task Management">
            <x-slot name="icon">
                <x-icons.task-square class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
            </x-slot>
            <x-admin.sidebar-dd-nav-subitem label="Statuses" :route="route('admin.task-statuses.index')"/>
            <x-admin.sidebar-dd-nav-subitem label="Tags" :route="route('admin.task-tags.index')"/>
            <x-admin.sidebar-dd-nav-subitem label="Tasks" :route="route('admin.tasks.index')"/>
            <x-admin.sidebar-dd-nav-subitem label="Calendar" :route="route('admin.task-calendars.index')"/>
        </x-admin.sidebar-dd-nav-item>

        {{--                    <x-admin.sidebar-nv-item label="Reports" route="{{route('admin.students.index')}}">--}}
        {{--                        <svg class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"--}}
        {{--                             x-description="Heroicon name: outline/document-report" xmlns="http://www.w3.org/2000/svg"--}}
        {{--                             fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">--}}
        {{--                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"--}}
        {{--                                  d="M9 17v-2m3 2v-4m3 4v-6m2 10H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>--}}
        {{--                        </svg>--}}
        {{--                    </x-admin.sidebar-nv-item>--}}

        <x-admin.sidebar-nv-item
            can="system_calendar_access"
            label="Institution Calendar" route="{{route('admin.system-calendars.index')}}">
            <x-icons.calendar class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
        </x-admin.sidebar-nv-item>

    </div>

    <div class="mt-6 pt-6">
        <div class="px-2 space-y-1">
            <x-admin.sidebar-dd-nav-item
                can="user_management_access"
                label="User Management">
                <x-slot name="icon">
                    <x-icons.people class="mr-3 flex-shrink-0 h-6 w-6 text-cyan-200"/>
                </x-slot>
                <x-admin.sidebar-dd-nav-subitem
                    can="user_access"
                    label="Users" route="{{route('admin.users.index')}}"/>
                <x-admin.sidebar-dd-nav-subitem
                    can="role_access"
                    label="Roles" route="{{route('admin.roles.index')}}"/>
                <x-admin.sidebar-dd-nav-subitem
                    can="permission_access"
                    label="Permissions"
                    route="{{route('admin.permissions.index')}}"/>
                <x-admin.sidebar-dd-nav-subitem
                    can="audit_log_access"
                    label="Audit" route="{{route('admin.audit-logs.index')}}"/>
            </x-admin.sidebar-dd-nav-item>

            <x-admin.sidebar-nv-item
                can="setting_access"
                label="Settings" route="{{route('admin.settings.index')}}">
                <x-icons.gear class="mr-3 h-6 w-6 text-cyan-200"/>
            </x-admin.sidebar-nv-item>

            <x-admin.sidebar-nv-item
                can="auth_profile_edit"
                label="Profile" route="{{route('profile.show')}}">
                <x-icons.profile class="mr-3 h-6 w-6 text-cyan-200"/>
            </x-admin.sidebar-nv-item>

        </div>
    </div>
</nav>
