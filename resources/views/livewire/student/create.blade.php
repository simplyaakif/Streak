<div class="max-w-3xl mx-auto py-10 px-4 sm:px-6 lg:py-2 lg:px-8">

    <form wire:loading.class="opacity-50" wire:submit.prevent="submit" class="mt-6 mb-6 space-y-8 divide-y
    divide-y-blue-gray-200">

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Personal Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be careful
                    what you share.</p>
            </div>

            <div class="sm:col-span-3 form-group {{ $errors->has('student.name') ? 'invalid' : '' }}">
                <label for="name">{{ trans('cruds.student.fields.name') }}</label>
                <x-common.data-input-text
                    error="student.name"
                    name="name" id="name" wire:model.defer="student.name"/>
            </div>
            <div class="sm:col-span-3 form-group {{ $errors->has('student.father_name') ? 'invalid' : '' }}">
                <label for="father_name">{{ trans('cruds.student.fields.father_name') }}</label>
                <x-common.data-input-text error="student.father_name" name="father_name" id="father_name"
                                          wire:model.defer="student.father_name"/>
            </div>
            <div class="sm:col-span-3 form-group {{ $errors->has('student.gender') ? 'invalid' : '' }}">
                <label class="form-label">{{ trans('cruds.student.fields.gender') }}</label>
                <x-common.data-input-select wire:model="student.gender">
                    <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
                    @foreach($this->listsForFields['gender'] as $key => $value)
                        <option value="{{ $key }}">{{ $value }}</option>
                    @endforeach
                </x-common.data-input-select>
                <div class="validation-message">
                    {{ $errors->first('student.gender') }}
                </div>
                <div class="help-block">
                    {{ trans('cruds.student.fields.gender_helper') }}
                </div>
            </div>
            <div class="sm:col-span-3 form-group {{ $errors->has('student.nationality') ? 'invalid' : '' }}">
                <label class="form-label" for="nationality">{{ trans('cruds.student.fields.nationality') }}</label>
                <x-common.data-input-text error="student.nationality" name="nationality" id="nationality"
                                          wire:model.defer="student.nationality"/>
            </div>
            <div class="sm:col-span-3 form-group {{ $errors->has('student.date_of_birth') ? 'invalid' : '' }}">
                <label class="form-label" for="date_of_birth">{{ trans('cruds.student.fields.date_of_birth') }}</label>
                <x-common.data-input-text
                    error="student.date_of_birth"
                    type="date"
                    wire:model="student.date_of_birth" id="date_of_birth" name="date_of_birth"/>
            </div>
            <div class="col-span-3 form-group {{ $errors->has('student.cnic_passport') ? 'invalid' : '' }}">
                <label class="form-label" for="cnic_passport">{{ trans('cruds.student.fields.cnic_passport') }}</label>
                <x-common.data-input-text error="student.cnic_passport" name="cnic_passport" id="cnic_passport"
                                          wire:model.defer="student.cnic_passport"/>
            </div>

        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Contact Information</h2>
                <p class="mt-1 text-sm text-blue-gray-500">This information will be displayed publicly so be careful
                    what you share.</p>
            </div>
            <div class="col-span-3 form-group {{ $errors->has('student.mobile') ? 'invalid' : '' }}">
                <label class="form-label" for="mobile">{{ trans('cruds.student.fields.mobile') }}</label>
                <x-common.data-input-text
                    placeholder="03335335792"
                    error="student.mobile"
                    name="mobile" id="mobile" wire:model.defer="student.mobile"/>
            </div>
            <div class="col-span-3 form-group {{ $errors->has('student.email') ? 'invalid' : '' }}">
                <label class="form-label" for="email">{{ trans('cruds.student.fields.email') }}</label>
                <x-common.data-input-text
                    error="student.email"
                    name="email" id="email" wire:model.defer="student.email"/>
            </div>
        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">File Uploads</h2>
                <p class="mt-1 text-sm text-blue-gray-500">Profile Pic Admission Form, Application form & Other form
                    snapshots.</p>
            </div>

            <div class="sm:col-span-3">
                <div class="form-group {{ $errors->has('mediaCollections.student_dp') ? 'invalid' : '' }}">
                    <label class="form-label" for="dp">Student Picture</label>
                    <x-dropzone id="dp" name="dp" action="{{ route('admin.students.storeMedia') }}"
                                collection-name="student_dp" max-file-size="2" max-width="4096" max-height="4096"
                                max-files="1"/>
                    <div class="validation-message">
                        {{ $errors->first('mediaCollections.student_dp') }}
                    </div>
                    <div class="help-block">
                        {{ trans('cruds.student.fields.dp_helper') }}
                    </div>
                </div>
            </div>
            <div
                class="sm:col-span-3
                form-group {{ $errors->has('mediaCollections.student_documents') ? 'invalid' :'' }}">
                <label class="form-label" for="documents">Student Form</label>
                <x-dropzone id="documents" name="documents" action="{{ route('admin.students.storeMedia') }}"
                            collection-name="student_documents" max-file-size="2"/>
                <div class="validation-message">
                    {{ $errors->first('mediaCollections.student_documents') }}
                </div>
                <div class="help-block">
                    {{ trans('cruds.student.fields.documents_helper') }}
                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Batch Details</h2>
                <p class="mt-1 text-sm text-blue-gray-500">Enter the Batch & Fee details for the candidate</p>
            </div>
            <div class="sm:col-span-6 bg-white rounded-lg shadow ">
                <div class="p-4 bg-gray-50 rounded-t-lg flex items-center justify-between">
                    <div class="w-3/4">
                        <x-common.data-label class="form-label required" label="Select Batch" for=""/>
                        <x-common.data-input-select error="selectedBatches" wire:model="selectBoxBatchId">
                            <option value=""> -- Select Batch --</option>
                            @forelse($batches as $batch)
                                <option value="{{$batch->id}}">{{$batch->title}}</option>
                            @empty
                                <option value="" disabled>No Batch Found</option>
                            @endforelse
                        </x-common.data-input-select>
                    </div>
                    <button class="btn btn-indigo" type="button" wire:click="addBatch()">Add Batch</button>
                </div>
                <div class="py-8 px-4">
                    <div class="divide-y ">
                        @forelse($selectedBatches as $key=>$individualBatch)
                            <div wire:key="batch-{{ $key }}" class="pt-4">
                                <div class="flex justify-between items-center">
                                    <div>
                                        {{$loop->iteration}}. {{ $individualBatch['batch']['title'] }}
                                    </div>
                                    <x-button.secondary
                                        wire:click="removeBatch({{$key}})">
                                        Remove Batch
                                    </x-button.secondary>
                                </div>

                                <div class="grid grid-cols-3 gap-6 my-4">
                                    <div>
                                        <x-common.data-label class="text-xs" label="Course Fee" for=""/>
                                        <x-common.data-input-text
            wire:model="selectedBatches.{{$key}}.total_fee" />
                                    </div>
                                    <div>
                                        <x-common.data-label class="text-xs" label="Course Start Date" for=""/>
                                        <x-common.data-input-text
                                            wire:model="selectedBatches.{{$key}}.sessions.session_start_date"
                                            type="date" value="{{now()->format('Y-m-d')}}"/>
                                    </div>
                                    <div>
                                        <x-common.data-label
                                            class="text-xs"
                                            label="Course End Date" for=""/>
                                        <x-common.data-input-text
                                            wire:model="selectedBatches.{{$key}}.sessions.session_end_date"
                                            value="{{now()->add($individualBatch['batch']['session_duration'])->format('Y-m-d')}}"
                                            type="date"/>
                                    </div>
                                </div>
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <div class="relative">
                                    <div class="absolute inset-0 flex items-center" aria-hidden="true">
                                        <div class="w-full border-t border-gray-300"></div>
                                    </div>
                                    <div class="relative flex justify-center">
                                        <span class="px-2 bg-white text-sm text-gray-500">
                                          Payment Information
                                        </span>
                                    </div>
                                </div>
                                <div>
                                    @forelse($individualBatch['installments'] as $ikey=>$installment)
                                        <div>
                                            <div class="flex justify-between items-center">
                                                <div>
                                                    {{$loop->iteration}}. Installment
                                                </div>
                                                <div>
                                                <x-button.secondary class="text-xs p-2"
                                                    wire:click="addInstallment({{$key}})">
                                                    <x-icons.add class="w-3 h-3 text-gray-700"/>
                                                </x-button.secondary>
                                                <x-button.secondary
                                                    wire:click="removeInstallment({{$key}},{{$ikey}})"
                                                    class="text-xs p-2">
                                                    <x-icons.minus class="w-3 h-3 text-gray-700"/>
                                                </x-button.secondary>
                                                </div>
                                            </div>
                                            <div>

                                            </div>
                                        <div wire:key="batch-{{$key}}-installment-{{ $ikey }}"
                                             class="grid grid-cols-6 gap-2 my-4">
                                            <div class="col-span-2">
                                                <x-common.data-label class="text-xs" label="Installment Amount" for=""/>
                                                <x-common.data-input-text
wire:model="selectedBatches.{{$key}}.installments.{{$ikey}}.installment_amount"
                                                />
                                            </div>
                                            <div class="col-span-2">
                                                <x-common.data-label class="text-xs" label="Due Date" for=""/>
                                                <x-common.data-input-text type="date"
              wire:model="selectedBatches.{{$key}}.installments.{{$ikey}}.installment_due_date"
                                                />
                                            </div>
                                            <div class="col-span-2">
                                                <x-common.data-label class="text-xs" label="Status" for=""/>
    <x-common.data-input-select

        wire:model="selectedBatches.{{$key}}.installments.{{$ikey}}.installment_paid_status"
                                                >
                                                    <option value="0">Unpaid</option>
                                                    <option value="1">Paid</option>
                                                </x-common.data-input-select>
                                            </div>

            @if($selectedBatches[$key]['installments'][$ikey]['installment_paid_status'])

                                            <div class="col-span-2">

                                                <x-common.data-label class="text-xs" label="Account" for=""/>
        <x-common.data-input-select
wire:model="selectedBatches.{{$key}}.installments.{{$ikey}}.installment_account_id"
                                                >
                                                    @forelse($accounts as $account)
                                                        <option value="{{$account->id}}">{{$account->title}}</option>
                                                    @empty
                                                    @endforelse
                                                </x-common.data-input-select>
                                            </div>

                                            <div class="col-span-2">
                                                <x-common.data-label class="text-xs" label="Transaction/Slip #" for=""/>
                                                <x-common.data-input-text
wire:model="selectedBatches.{{$key}}.installments.{{$ikey}}.installment_transaction_number"
                                                />
                                            </div>
                                                <div class="col-span-2">
                                                <x-common.data-label class="text-xs" label="Date of Payment" for=""/>
                                                <x-common.data-input-text type="date"
wire:model="selectedBatches.{{$key}}.installments.{{$ikey}}.installment_paid_on"
                                                />
                                            </div>
                        @endif

                                        </div>
                                        </div>

                                    @empty
                                    @endforelse
                                </div>

                            </div>
                        @empty
                            No Batch is Selected
                        @endforelse
                    </div>

                </div>
            </div>

        </div>

        <div class="grid grid-cols-1 gap-y-6 sm:grid-cols-6 sm:gap-x-6 pt-6">
            <div class="sm:col-span-6">
                <h2 class="text-xl font-medium text-blue-gray-900">Send Notifications</h2>
                <p class="mt-1 text-sm text-blue-gray-500">Notify user about all the details</p>
                <div class="divide-y divide-gray-200">
                    <div class="">
                        <ul role="list" class="mt-2 divide-y divide-gray-200">
                            <li class="py-4 flex items-center justify-between"
                                x-data="{ on: @entangle('notifications.sms') }">
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-1-label">
                                        Send SMS
                                    </p>
                                    <p class="text-sm text-gray-500" id="privacy-option-1-description">
                                        Send student SMS confirmation of admission.
                                    </p>
                                </div>
                                <button type="button"
                                        class="ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2
                                        border-transparent rounded-full cursor-pointer transition-colors ease-in-out
                                        duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2
                                        focus:ring-sky-500 bg-cyan-500"
                                        role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled"
                                        x-state:off="Not Enabled" :class="{ 'bg-cyan-500': on, 'bg-gray-200': !(on) }"
                                        aria-labelledby="privacy-option-1-label"
                                        aria-describedby="privacy-option-1-description" :aria-checked="on.toString()"
                                        @click="on = !on">
                                    <span aria-hidden="true"
                                          class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-5"
                                          x-state:on="Enabled" x-state:off="Not Enabled"
                                          :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                </button>
                            </li>
                            <li class="py-4 flex items-center justify-between"
                                x-data="{ on: @entangle('notifications.email') }">
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-2-label">
                                        Send Email
                                    </p>
                                    <p class="text-sm text-gray-500" id="privacy-option-2-description">
                                        Send student Email confirmation of admission .
                                    </p>
                                </div>
                                <button type="button"
                                        class="bg-gray-200 ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-sky-500"
                                        role="switch" aria-checked="false" x-ref="switch" x-state:on="Enabled"
                                        x-state:off="Not Enabled" :class="{ 'bg-cyan-500': on, 'bg-gray-200': !(on) }"
                                        aria-labelledby="privacy-option-2-label"
                                        aria-describedby="privacy-option-2-description" :aria-checked="on.toString()"
                                        @click="on = !on">
                                    <span aria-hidden="true"
                                          class="translate-x-0 inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200"
                                          x-state:on="Enabled" x-state:off="Not Enabled"
                                          :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                </button>
                            </li>
                            <li class="py-4 flex items-center justify-between"
                                x-data="{ on: @entangle('notifications.account') }">
                                <div class="flex flex-col">
                                    <p class="text-sm font-medium text-gray-900" id="privacy-option-3-label">
                                        Create Student Login Account
                                    </p>
                                    <p class="text-sm text-gray-500" id="privacy-option-3-description">
                                        Send student his/her login details via Email.
                                    </p>
                                </div>
                                <button type="button"
                                        class="ml-4 relative inline-flex flex-shrink-0 h-6 w-11 border-2
                                        border-transparent rounded-full cursor-pointer transition-colors ease-in-out
                                        duration-200 focus:outline-none focus:ring-2 focus:ring-offset-2
                                        focus:ring-sky-500 bg-cyan-500"
                                        role="switch" aria-checked="true" x-ref="switch" x-state:on="Enabled"
                                        x-state:off="Not Enabled" :class="{ 'bg-cyan-500': on, 'bg-gray-200': !(on) }"
                                        aria-labelledby="privacy-option-3-label"
                                        aria-describedby="privacy-option-3-description" :aria-checked="on.toString()"
                                        @click="on = !on">
                                    <span aria-hidden="true"
                                          class="inline-block h-5 w-5 rounded-full bg-white shadow transform ring-0 transition ease-in-out duration-200 translate-x-5"
                                          x-state:on="Enabled" x-state:off="Not Enabled"
                                          :class="{ 'translate-x-5': on, 'translate-x-0': !(on) }"></span>
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="flex space-x-1">
                <x-button.primary type="submit">Save</x-button.primary>
                <x-button.secondary href="{{ route('admin.students.index') }}">Cancel</x-button.secondary>
            </div>
        </div>
    </form>

    <x-common.validation-alert :errors="$errors->all()"/>
</div>
