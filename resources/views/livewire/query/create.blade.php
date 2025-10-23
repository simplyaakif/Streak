<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-2 lg:px-8">

    <form wire:submit="submit" class="mt-6 mb-6 space-y-8 divide-y divide-slate-200">
        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-slate-900">Personal Information</h2>
                <p class="mt-1 text-sm text-slate-500">This information will be displayed publicly so be careful
                    what you share.</p>
            </div>

            <div class=" sm:col-span-3  {{ $errors->has('query.name') ? 'invalid' : '' }}">
                <label class="form-label required" for="name">{{ trans('cruds.query.fields.name') }}</label>
                <x-common.data-input-text
                    error="query.name" placeholder="Query Full Name"
                    label="name" name="name"  wire:model="query.name"/>
            </div>
            <div class=" sm:col-span-3  {{ $errors->has('query.mobile') ? 'invalid' : '' }}">
                <label class="form-label required" for="mobile">{{ trans('cruds.query.fields.mobile') }}</label>
                <x-common.data-input-text
                    error="query.mobile" placeholder="Query mobile number. +923335335792"
                    label="mobile"  name="mobile"  wire:model="query.mobile"/>
            </div>
            <div class="sm:col-span-3  {{ $errors->has('query.email') ? 'invalid' : '' }}">
                <label class="form-label" for="email">{{ trans('cruds.query.fields.email') }}</label>

                <x-common.data-input-text
                    error="query.email" placeholder="Query valid email address"
                    type="email" name="email" label="email" wire:model="query.email"/>
            </div>
            <div class="sm:col-span-3  {{ $errors->has('query.telephone') ? 'invalid' : '' }}">
                <label class="form-label" for="telephone">Telephone</label>
                <x-common.data-input-text
                    error="query.telephone" placeholder="Query telephone or secondary number"
                    name="telephone" label="telephone" wire:model="query.telephone"/>
            </div>
            <div class="sm:col-span-6  {{ $errors->has('query.address') ? 'invalid' : '' }}">
                <label class="form-label" for="address">{{ trans('cruds.query.fields.address') }}</label>
                <textarea
                    placeholder="Current address"
                    class="form-control" name="address" id="address" wire:model="query.address"
                          rows="4"></textarea>

            </div>

        </div>

        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-slate-900">Course Information</h2>
                <p class="mt-1 text-sm text-slate-500">The information relating to the course of query</p>
            </div>
            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Course" for=""/>
                <x-common.data-input-select name=""
error="qCourses.course_id"
                                            wire:model="qCourses.course_id" >
                    <option value="">Select Course</option>
                    @foreach($courses as $course)
                        <option value="{{$course->id}}">{{$course->title}}</option>
                    @endforeach
                </x-common.data-input-select>
            </div>
            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Session Learning Type" for=""/>
                <x-common.data-input-select
                    error="qCourses.learning_type"
                    name="" wire:model="qCourses.learning_type">
                    <option value="">Select Mode</option>

                    @foreach(App\Models\Query::learning_mode as $id => $label)
                        <option value="{{$id}}">{{$label}}</option>
                    @endforeach
                </x-common.data-input-select>
            </div>

            <div class="sm:col-span-6">
                <x-common.data-label class="form-label required" label="Remarks" for=""/>
                <x-common.data-input-text name="" wire:model="qCourses.remarks"
                                          placeholder="Any special request from the query regarding course"/>
            </div>


        </div>

        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <x-common.form-header title="Additional Information" subtitle="The information relating to query."/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Dealt By" for=""/>

                @if(auth()->user()->is_admin)
                    <x-common.data-input-select
                        error="query.staff_user_id"
                        wire:model="query.staff_user_id">
                        <option value="">-- Select Option --</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </x-common.data-input-select>
                @else
                    <x-common.data-input-select
                        error="query.staff_user_id"
                        :is_skip_select="true" disabled wire:model="query.staff_user_id">
                            <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
                    </x-common.data-input-select>
                @endif

            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Contact Type" for=""/>
                    <x-common.data-input-select
                        error="query.contact_type"
                        wire:model="query.contact_type">
                        <option value="">-- Select Option --</option>
                @foreach(App\Models\Query::contact_type as $id => $label)
                            <option value="{{$id}}">{{$label}}</option>
                @endforeach
                    </x-common.data-input-select>

            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Query Remarks/Comments" for=""/>
                <x-common.data-input-text
                    placeholder="Staff remarks regarding query"
                    wire:model="query.remarks"/>
            </div>
            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Preferred Timings" for=""/>
                <x-common.data-input-select  wire:model="query.p_timings">
                    @foreach(App\Models\Query::preferred_timings as $id => $label)
                        <option value="{{$label}}">{{$label}}</option>
                    @endforeach
                </x-common.data-input-select>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Marketing Reference" for=""/>
                <x-common.data-input-select  wire:model.live="query.reference">
                    @foreach(App\Models\Query::marketing as $id => $label)
                        <option value="{{$id}}">{{$label}}</option>
                    @endforeach
                </x-common.data-input-select>
            </div>
        </div>

        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-slate-900">Timeline / Status</h2>
                <p class="mt-1 text-sm text-slate-500">This will define query timeline in the system.</p>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Status" for=""/>
                <x-common.data-input-select :is_skip_select="true" wire:model.live="timeline.timeline_id" disabled >
{{--                    @foreach($timelines as $timeline)--}}
                        <option selected value="{{$timelines[0]->id}}">{{$timelines[0]->title}}</option>
{{--                    @endforeach--}}
                </x-common.data-input-select>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Comments on Status" for=""/>
                <x-common.data-input-text
                    placeholder="Remarks regarding status"
                    wire:model="timeline.remarks"/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Status Date & Time" for=""/>
                <x-common.data-input-text disabled value="{{now()->toDateTimeString()}}"/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Follow Up Date & Time" for=""/>
{{--                <x-date-picker picker="" id="follow_up" name="follow_up"--}}
{{--                               wire:model.live="timeline.fw_date_time" />--}}
                <x-common.data-input-text
                    id="follow_up" name="follow_up"
                    type="datetime-local" wire:model.live="timeline.fw_date_time" />
            </div>

        </div>


        <div class="form-group pt-6">
            <button class="inline-flex items-center px-4 py-2 border
                        border-transparent
                        shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500" type="submit">
                {{ trans('global.save') }}
            </button>
            <a href="{{ route('admin.queries.index') }}" class="inline-flex items-center px-4 py-2
                        border
                        border-gray-300
                        shadow-sm
                        text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                {{ trans('global.cancel') }}
            </a>
        </div>
    </form>
    <div>
            <x-common.validation-alert :errors="$errors->all()"/>
    </div>
</div>
