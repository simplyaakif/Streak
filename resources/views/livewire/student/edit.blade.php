<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('mediaCollections.student_dp') ? 'invalid' : '' }}">
        <label class="form-label" for="dp">{{ trans('cruds.student.fields.dp') }}</label>
        <x-dropzone id="dp" name="dp" action="{{ route('admin.students.storeMedia') }}" collection-name="student_dp" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.student_dp') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.dp_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('student.name') ? 'invalid' : '' }}">
        <label class="form-label" for="name">{{ trans('cruds.student.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" wire:model.defer="student.name">
        <div class="validation-message">
            {{ $errors->first('student.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('student.user_id') ? 'invalid' : '' }}">
        <label class="form-label" for="user">{{ trans('cruds.student.fields.user') }}</label>
        <x-select-list class="form-control" id="user" name="user" :options="$this->listsForFields['user']" wire:model="student.user_id" />
        <div class="validation-message">
            {{ $errors->first('student.user_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.user_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('student.father_name') ? 'invalid' : '' }}">
        <label class="form-label" for="father_name">{{ trans('cruds.student.fields.father_name') }}</label>
        <input class="form-control" type="text" name="father_name" id="father_name" wire:model.defer="student.father_name">
        <div class="validation-message">
            {{ $errors->first('student.father_name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.father_name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('student.gender') ? 'invalid' : '' }}">
        <label class="form-label">{{ trans('cruds.student.fields.gender') }}</label>
        <select class="form-control" wire:model="student.gender">
            <option value="null" disabled>{{ trans('global.pleaseSelect') }}...</option>
            @foreach($this->listsForFields['gender'] as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <div class="validation-message">
            {{ $errors->first('student.gender') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.gender_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('student.nationality') ? 'invalid' : '' }}">
        <label class="form-label" for="nationality">{{ trans('cruds.student.fields.nationality') }}</label>
        <input class="form-control" type="text" name="nationality" id="nationality" wire:model.defer="student.nationality">
        <div class="validation-message">
            {{ $errors->first('student.nationality') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.nationality_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('student.date_of_birth') ? 'invalid' : '' }}">
        <label class="form-label" for="date_of_birth">{{ trans('cruds.student.fields.date_of_birth') }}</label>
        <x-date-picker class="form-control" wire:model="student.date_of_birth" id="date_of_birth" name="date_of_birth" picker="date" />
        <div class="validation-message">
            {{ $errors->first('student.date_of_birth') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.date_of_birth_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('student.cnic_passport') ? 'invalid' : '' }}">
        <label class="form-label" for="cnic_passport">{{ trans('cruds.student.fields.cnic_passport') }}</label>
        <input class="form-control" type="text" name="cnic_passport" id="cnic_passport" wire:model.defer="student.cnic_passport">
        <div class="validation-message">
            {{ $errors->first('student.cnic_passport') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.cnic_passport_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('student.mobile') ? 'invalid' : '' }}">
        <label class="form-label" for="mobile">{{ trans('cruds.student.fields.mobile') }}</label>
        <input class="form-control" type="text" name="mobile" id="mobile" wire:model.defer="student.mobile">
        <div class="validation-message">
            {{ $errors->first('student.mobile') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.mobile_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('student.email') ? 'invalid' : '' }}">
        <label class="form-label" for="email">{{ trans('cruds.student.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" wire:model.defer="student.email">
        <div class="validation-message">
            {{ $errors->first('student.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.student_documents') ? 'invalid' : '' }}">
        <label class="form-label" for="documents">{{ trans('cruds.student.fields.documents') }}</label>
        <x-dropzone id="documents" name="documents" action="{{ route('admin.students.storeMedia') }}" collection-name="student_documents" max-file-size="2" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.student_documents') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.student.fields.documents_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.students.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>