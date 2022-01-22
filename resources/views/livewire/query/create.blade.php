<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-2 lg:px-8">

    <form wire:submit.prevent="submit" class="mt-6 mb-6 space-y-8 divide-y divide-y-blue-gray-200">
        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be careful
                    what you share.</p>
            </div>

            <div class=" sm:col-span-3  {{ $errors->has('query.name') ? 'invalid' : '' }}">
                <label class="form-label required" for="name">{{ trans('cruds.query.fields.name') }}</label>
                <x-common.data-input-text
                    error="query.name" placeholder="Query Full Name"
                    label="name" name="name"  wire:model.defer="query.name"/>
            </div>
            <div class=" sm:col-span-3  {{ $errors->has('query.mobile') ? 'invalid' : '' }}">
                <label class="form-label required" for="mobile">{{ trans('cruds.query.fields.mobile') }}</label>
                <x-common.data-input-text
                    error="query.mobile" placeholder="Query mobile number. +923335335792"
                    label="mobile"  name="mobile"  wire:model.defer="query.mobile"/>
            </div>
            <div class="sm:col-span-3  {{ $errors->has('query.email') ? 'invalid' : '' }}">
                <label class="form-label" for="email">{{ trans('cruds.query.fields.email') }}</label>

                <x-common.data-input-text
                    error="query.email" placeholder="Query valid email address"
                    type="email" name="email" label="email" wire:model.defer="query.email"/>
            </div>
            <div class="sm:col-span-3  {{ $errors->has('query.telephone') ? 'invalid' : '' }}">
                <label class="form-label" for="telephone">Telephone</label>
                <x-common.data-input-text
                    error="query.telephone" placeholder="Query telephone or secondary number"
                    name="telephone" label="telephone" wire:model.defer="query.telephone"/>
            </div>
            <div class="sm:col-span-6  {{ $errors->has('query.address') ? 'invalid' : '' }}">
                <label class="form-label" for="address">{{ trans('cruds.query.fields.address') }}</label>
                <textarea
                    placeholder="Current address"
                    class="form-control" name="address" id="address" wire:model.defer="query.address"
                          rows="4"></textarea>

            </div>

        </div>

        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Course Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">The information relating to the course of query</p>
            </div>
            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Course" for=""/>
                <x-common.data-input-select name=""
error="qCourses.course_id"
                                            wire:model.defer="qCourses.course_id" >
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
                    name="" wire:model.defer="qCourses.learning_type">
                    <option value="">Select Mode</option>

                    @foreach(App\Models\Query::learning_mode as $id => $label)
                        <option value="{{$id}}">{{$label}}</option>
                    @endforeach
                </x-common.data-input-select>
            </div>

            <div class="sm:col-span-6">
                <x-common.data-label class="form-label required" label="Remarks" for=""/>
                <x-common.data-input-text name="" wire:model.defer="qCourses.remarks"
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
                        wire:model.defer="query.staff_user_id">
                        <option value="">-- Select Option --</option>
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </x-common.data-input-select>
                @else
                    <x-common.data-input-select
                        error="query.staff_user_id"
                        :is_skip_select="true" disabled wire:model.defer="query.staff_user_id">
                            <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
                    </x-common.data-input-select>
                @endif

            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Query Remarks/Comments" for=""/>
                <x-common.data-input-text
                    placeholder="Staff remarks regarding query"
                    wire:model.defer="query.remarks"/>
            </div>
            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Preferred Timings" for=""/>
                <x-common.data-input-select  wire:model.defer="query.p_timings">
                    @foreach(App\Models\Query::preferred_timings as $id => $label)
                        <option value="{{$label}}">{{$label}}</option>
                    @endforeach
                </x-common.data-input-select>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Marketing Reference" for=""/>
                <x-common.data-input-select  wire:model="query.reference">
                    @foreach(App\Models\Query::marketing as $id => $label)
                        <option value="{{$id}}">{{$label}}</option>
                    @endforeach
                </x-common.data-input-select>
            </div>
        </div>

        <div class=" grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Timeline / Status</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This will define query timeline in the system.</p>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Status" for=""/>
                <x-common.data-input-select :is_skip_select="true" wire:model="timeline.timeline_id" disabled >
{{--                    @foreach($timelines as $timeline)--}}
                        <option selected value="{{$timelines[0]->id}}">{{$timelines[0]->title}}</option>
{{--                    @endforeach--}}
                </x-common.data-input-select>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Comments on Status" for=""/>
                <x-common.data-input-text
                    placeholder="Remarks regarding status"
                    wire:model.defer="timeline.remarks"/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Status Date & Time" for=""/>
                <x-common.data-input-text disabled value="{{now()->toDateTimeString()}}"/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Follow Up Date & Time" for=""/>
{{--                <x-date-picker picker="" id="follow_up" name="follow_up"--}}
{{--                               wire:model="timeline.fw_date_time" />--}}
                <x-common.data-input-text
                    id="follow_up" name="follow_up"
                    type="datetime-local" wire:model="timeline.fw_date_time" />
            </div>

        </div>


        <div class="form-group pt-6">
            <button class="btn btn-indigo mr-2" type="submit">
                {{ trans('global.save') }}
            </button>
            <a href="{{ route('admin.queries.index') }}" class="btn btn-secondary">
                {{ trans('global.cancel') }}
            </a>
        </div>
    </form>
    <div>
            <x-common.validation-alert :errors="$errors->all()"/>
    </div>
</div>
