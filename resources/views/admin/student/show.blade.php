@extends('layouts.admin')
@section('content')
    <div class="row">
        <article>
            <div>
                <div>
                    <img class="h-32 w-full object-cover lg:h-48"
                         src="https://images.unsplash.com/photo-1444628838545-ac4016a5418a?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&amp;ixlib=rb-1.2.1&amp;auto=format&amp;fit=crop&amp;w=1950&amp;q=80"
                         alt="">
                </div>
                <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="-mt-12 sm:-mt-16 sm:flex sm:items-end sm:space-x-5">
                        <div class="flex">
                            @forelse($student->dp as $key => $entry)
                                {{--                            <a class="link-photo" href="{{ $entry['url'] }}">--}}
                                {{--                                <img src="{{ $entry['thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">--}}
                                {{--                            </a>--}}
                                <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32 flex-shrink-0 object-cover mx-auto rounded-full"
                                     src="{{ $entry['url'] }}" alt="{{ $entry['name'] }}"
                                     title="{{ $entry['name'] }}"
                                >
                            @empty
                                <img class="h-24 w-24 rounded-full ring-4 ring-white sm:h-32 sm:w-32 flex-shrink-0 mx-auto rounded-full"
                                     src="{{$student->avatarUrl()}}"
                                     alt="">
                            @endforelse
                        </div>
                        <div
                            class="mt-6 sm:flex-1 sm:min-w-0 sm:flex sm:items-center sm:justify-end sm:space-x-6 sm:pb-1">
                            <div class="sm:hidden 2xl:block mt-6 min-w-0 flex-1">
                                <h1 class="text-2xl font-bold text-gray-900 truncate">
                                    {{$student->name}}
                                </h1>
                            </div>
                            <div
                                class="mt-6 flex flex-col justify-stretch space-y-3 sm:flex-row sm:space-y-0 sm:space-x-4">
                                <button type="button"
                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                         x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <span>Message</span>
                                </button>
                                <button type="button"
                                        class="inline-flex justify-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                    <svg class="-ml-1 mr-2 h-5 w-5 text-gray-400"
                                         x-description="Heroicon name: solid/mail" xmlns="http://www.w3.org/2000/svg"
                                         viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                        <path
                                            d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path>
                                        <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>
                                    </svg>
                                    <span>Email</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="hidden sm:block 2xl:hidden mt-6 min-w-0 flex-1">
                        <h1 class="text-2xl font-bold text-gray-900 truncate">
                            {{$student->name}}
                        </h1>
                    </div>
                </div>
            </div>

            <div x-data="{tab: window.location.hash ? window.location.hash.substring(1) : 'profile' }">

                <!-- Tabs -->
                <div class="mt-6 sm:mt-2 2xl:mt-5">
                    <div class="border-b border-gray-200">
                        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                            <nav class="-mb-px flex space-x-8" aria-label="Tabs">

                                <a :class="{ 'border-cyan-500 border-b-2': tab === 'profile' }"
                                   @click.prevent="tab = 'profile'; window.location.hash = 'profile'" href="#"
                                   class=" text-gray-900 whitespace-nowrap py-4 px-1
                        font-medium text-sm" x-state:on="Current" x-state:off="Default" aria-current="page"
                                   x-state-description="Current: &quot;border-cyan-500 text-gray-900&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                    Profile
                                </a>

                                <a :class="{ 'border-cyan-500 border-b-2': tab === 'sessions' }" @click.prevent="tab =
                        'sessions'; window.location.hash = 'sessions'" href="#"
                                   class="border-transparent text-gray-500 hover:text-gray-700
                        hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                   x-state-description="undefined: &quot;border-cyan-500 text-gray-900&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                    Sessions
                                </a>

                                <a :class="{ 'border-cyan-500 border-b-2': tab === 'user_account' }" @click.prevent="tab =
                        'user_account'; window.location.hash = 'user_account'" href="#"
                                   class="border-transparent text-gray-500 hover:text-gray-700
                        hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                   x-state-description="undefined: &quot;border-cyan-500 text-gray-900&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                    User Account
                                </a>

                                <a :class="{ 'border-cyan-500 border-b-2': tab === 'guardian' }" @click.prevent="tab =
                        'guardian'; window.location.hash = 'guardian'" href="#" class="border-transparent
                        text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                   x-state-description="undefined: &quot;border-cyan-500 text-gray-900&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                    Guardian
                                </a>

                                <a :class="{ 'border-cyan-500 border-b-2': tab === 'attendance' }" @click.prevent="tab =
                        'attendance'; window.location.hash = 'attendance'" href="#" class="border-transparent
                        text-gray-500 hover:text-gray-700 hover:border-gray-300 whitespace-nowrap py-4 px-1 border-b-2 font-medium text-sm"
                                   x-state-description="undefined: &quot;border-cyan-500 text-gray-900&quot;, undefined: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
                                    Attendance Records
                                </a>

                            </nav>
                        </div>
                    </div>
                </div>

                <!-- Description list -->
                <div class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div x-show="tab === 'profile'">
                        <dl class="grid grid-cols-1 gap-x-4 gap-y-8 sm:grid-cols-2">

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Father Name
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{$student->father_name}}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Mobile
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{$student->mobile}}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Email
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{$student->email}}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Telephone
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{$student->telephone}}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Gender
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{$student->gender}}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Nationality
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{$student->nationality}}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    CNIC/Passport Number
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{$student->cnic_passport}}
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Salary
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    $145,000
                                </dd>
                            </div>

                            <div class="sm:col-span-1">
                                <dt class="text-sm font-medium text-gray-500">
                                    Birthday
                                </dt>
                                <dd class="mt-1 text-sm text-gray-900">
                                    {{$student->date_of_birth}}
                                </dd>
                            </div>

                            <div class="sm:col-span-2">
                                <dt class="text-sm font-medium text-gray-500">
                                    About
                                </dt>
                                <dd class="mt-1 max-w-prose text-sm text-gray-900 space-y-5">

                                    <p>Tincidunt quam neque in cursus viverra orci, dapibus nec tristique. Nullam ut sit
                                        dolor consectetur urna, dui cras nec sed. Cursus risus congue arcu aenean
                                        posuere aliquam.</p>
                                    <p>Et vivamus lorem pulvinar nascetur non. Pulvinar a sed platea rhoncus ac mauris
                                        amet. Urna, sem pretium sit pretium urna, senectus vitae. Scelerisque fermentum,
                                        cursus felis dui suspendisse velit pharetra. Augue et duis cursus maecenas eget
                                        quam lectus. Accumsan vitae nascetur pharetra rhoncus praesent dictum risus
                                        suspendisse.</p>

                                </dd>
                            </div>
                        </dl>
                    </div>

                    <div x-show="tab === 'sessions'">
                        @foreach($student->batches as $batch)
                            {{$batch->title}}
                        @endforeach
                    </div>
                    <div x-show="tab === 'user_account'">

                    </div>

                    <div x-show="tab === 'guardian'">
                        <!-- This example requires Tailwind CSS v2.0+ -->
                        <x-common.empty-state title="No guardian" subtitle="Add a guardian to this student" label="Add
                Guardian"/>
                    </div>

                    <div x-show="tab === 'attendance'">

                    </div>

                </div>

            </div>

        </article>
        <div class="card bg-blueGray-100">

            {{--        <div class="card-body">--}}
            {{--            <div class="pt-3">--}}
            {{--                <table class="table table-view">--}}
            {{--                    <tbody class="bg-white">--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.id') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                {{ $student->id }}--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.dp') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                @foreach($student->dp as $key => $entry)--}}
            {{--                                    <a class="link-photo" href="{{ $entry['url'] }}">--}}
            {{--                                        <img src="{{ $entry['preview_thumbnail'] }}" alt="{{ $entry['name'] }}" title="{{ $entry['name'] }}">--}}
            {{--                                    </a>--}}
            {{--                                @endforeach--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.name') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                {{ $student->name }}--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.user') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                @if($student->user)--}}
            {{--                                    <span class="badge badge-relationship">{{ $student->user->name ?? '' }}</span>--}}
            {{--                                @endif--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.father_name') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                {{ $student->father_name }}--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.gender') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                {{ $student->gender_label }}--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.nationality') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                {{ $student->nationality }}--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.date_of_birth') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                {{ $student->date_of_birth }}--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.cnic_passport') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                {{ $student->cnic_passport }}--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.mobile') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                {{ $student->mobile }}--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.email') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                <a class="link-light-blue" href="mailto:{{ $student->email }}">--}}
            {{--                                    <i class="far fa-envelope fa-fw">--}}
            {{--                                    </i>--}}
            {{--                                    {{ $student->email }}--}}
            {{--                                </a>--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                        <tr>--}}
            {{--                            <th>--}}
            {{--                                {{ trans('cruds.student.fields.documents') }}--}}
            {{--                            </th>--}}
            {{--                            <td>--}}
            {{--                                @foreach($student->documents as $key => $entry)--}}
            {{--                                    <a class="link-light-blue" href="{{ $entry['url'] }}">--}}
            {{--                                        <i class="far fa-file">--}}
            {{--                                        </i>--}}
            {{--                                        {{ $entry['file_name'] }}--}}
            {{--                                    </a>--}}
            {{--                                @endforeach--}}
            {{--                            </td>--}}
            {{--                        </tr>--}}
            {{--                    </tbody>--}}
            {{--                </table>--}}
            {{--            </div>--}}
            {{--            <div class="form-group">--}}
            {{--                @can('student_edit')--}}
            {{--                    <a href="{{ route('admin.students.edit', $student) }}" class="btn btn-cyan mr-2">--}}
            {{--                        {{ trans('global.edit') }}--}}
            {{--                    </a>--}}
            {{--                @endcan--}}
            {{--                <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">--}}
            {{--                    {{ trans('global.back') }}--}}
            {{--                </a>--}}
            {{--            </div>--}}
            {{--        </div>--}}
        </div>
    </div>
@endsection
