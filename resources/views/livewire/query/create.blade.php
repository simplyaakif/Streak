<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-2 lg:px-8">

    <form wire:submit.prevent="submit" class="mt-6 mb-6 space-y-8 divide-y divide-y-blue-gray-200">

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be careful
                    what you share.</p>
            </div>

            <div class=" sm:col-span-3  {{ $errors->has('query.name') ? 'invalid' : '' }}">
                <label class="form-label required" for="name">{{ trans('cruds.query.fields.name') }}</label>
                <x-common.data-input-text label="name" name="name" required wire:model.defer="query.name"/>
                <div class="validation-message">
                    {{ $errors->first('query.name') }}
                </div>
                <div class="help-block">
                    {{ trans('cruds.query.fields.name_helper') }}
                </div>
            </div>
            <div class=" sm:col-span-3  {{ $errors->has('query.mobile') ? 'invalid' : '' }}">
                <label class="form-label required" for="mobile">{{ trans('cruds.query.fields.mobile') }}</label>
                <x-common.data-input-text label="mobile"  name="mobile" required wire:model.defer="query.mobile"/>
                <div class="validation-message">
                    {{ $errors->first('query.mobile') }}
                </div>
                <div class="help-block">
                    {{ trans('cruds.query.fields.mobile_helper') }}
                </div>
            </div>
            <div class="sm:col-span-3  {{ $errors->has('query.email') ? 'invalid' : '' }}">
                <label class="form-label" for="email">{{ trans('cruds.query.fields.email') }}</label>

                <x-common.data-input-text type="email" name="email" label="email" wire:model.defer="query.email"/>
                <div class="validation-message">
                    {{ $errors->first('query.email') }}
                </div>
                <div class="help-block">
                    {{ trans('cruds.query.fields.email_helper') }}
                </div>
            </div>
            <div class="sm:col-span-3  {{ $errors->has('query.telephone') ? 'invalid' : '' }}">
                <label class="form-label" for="telephone">Telephone</label>
                <x-common.data-input-text  name="telephone" label="telephone" wire:model.defer="query.telephone"/>
                <div class="validation-message">
                    {{ $errors->first('query.telephone') }}
                </div>
                <div class="help-block">

                </div>
            </div>
            <div class="sm:col-span-6  {{ $errors->has('query.address') ? 'invalid' : '' }}">
                <label class="form-label" for="address">{{ trans('cruds.query.fields.address') }}</label>
                <textarea class="form-control" name="address" id="address" wire:model.defer="query.address"
                          rows="4"></textarea>
                <div class="validation-message">
                    {{ $errors->first('query.address') }}
                </div>
                <div class="help-block">
                    {{ trans('cruds.query.fields.address_helper') }}
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Course Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">The information relating to the course of query</p>
            </div>
            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Course" for=""/>
                <x-common.data-input-select >
                    @foreach($courses as $course)
                        <option value="">{{$course->title}}</option>
                    @endforeach
                </x-common.data-input-select>
            </div>
            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Session Learning Type" for=""/>
                <x-common.data-input-text />
            </div>


        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <x-common.form-header title="Additional Information" subtitle="The information relating to query."/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Dealt By" for=""/>

                @if(auth()->user()->is_admin)
                    <x-common.data-input-select  wire:model.defer="query.staff_user_id">
                        @foreach($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                        @endforeach
                    </x-common.data-input-select>
                @else
                    <x-common.data-input-select :is_skip_select="true" disabled wire:model.defer="query.staff_user_id">
                            <option value="{{Auth::user()->id}}">{{Auth::user()->name}}</option>
                    </x-common.data-input-select>
                @endif

            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Query Remarks/Comments" for=""/>
                <x-common.data-input-text wire:model.defer="query.remarks"/>
            </div>
            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Preferred Timings" for=""/>
                <x-common.data-input-text wire:model.defer="query.p_timings"/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Marketing Reference" for=""/>
                <x-common.data-input-text wire:model="query.reference"/>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Timeline / Status</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This will define query timeline in the system.</p>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Status" for=""/>
                <x-common.data-input-text value="Entry in System" disabled/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Comments on Status" for=""/>
                <x-common.data-input-text value=""/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Status Date & Time" for=""/>
                <x-common.data-input-text value="{{now()->toDateTimeString()}}"/>
            </div>

            <div class="sm:col-span-3">
                <x-common.data-label class="form-label required" label="Follow Up Date & Time" for=""/>
                <x-date-picker picker="" id="follow-up" name="followUp" wire:model="query.created_at" />
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
</div>
