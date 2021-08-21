<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('batch.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.batch.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model.defer="batch.title">
        <div class="validation-message">
            {{ $errors->first('batch.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.batch.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('batch.limit') ? 'invalid' : '' }}">
        <label class="form-label" for="limit">{{ trans('cruds.batch.fields.limit') }}</label>
        <input class="form-control" type="text" name="limit" id="limit" wire:model.defer="batch.limit">
        <div class="validation-message">
            {{ $errors->first('batch.limit') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.batch.fields.limit_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('batch.course_id') ? 'invalid' : '' }}">
        <label class="form-label required" for="course">{{ trans('cruds.batch.fields.course') }}</label>
        <x-select-list class="form-control" required id="course" name="course" :options="$this->listsForFields['course']" wire:model="batch.course_id" />
        <div class="validation-message">
            {{ $errors->first('batch.course_id') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.batch.fields.course_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.batch_batch_content') ? 'invalid' : '' }}">
        <label class="form-label" for="batch_content">{{ trans('cruds.batch.fields.batch_content') }}</label>
        <x-dropzone id="batch_content" name="batch_content" action="{{ route('admin.batches.storeMedia') }}" collection-name="batch_batch_content" max-file-size="2" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.batch_batch_content') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.batch.fields.batch_content_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('batch.time') ? 'invalid' : '' }}">
        <label class="form-label" for="time">{{ trans('cruds.batch.fields.time') }}</label>
        <x-date-picker class="form-control" wire:model="batch.time" id="time" name="time" />
        <div class="validation-message">
            {{ $errors->first('batch.time') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.batch.fields.time_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('batch.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.batch.fields.description') }}</label>
        <textarea class="form-control" name="description" id="description" wire:model.defer="batch.description" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('batch.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.batch.fields.description_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.batch_featured_image') ? 'invalid' : '' }}">
        <label class="form-label" for="featured_image">{{ trans('cruds.batch.fields.featured_image') }}</label>
        <x-dropzone id="featured_image" name="featured_image" action="{{ route('admin.batches.storeMedia') }}" collection-name="batch_featured_image" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.batch_featured_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.batch.fields.featured_image_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.batches.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>