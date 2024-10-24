<form wire:submit="submit" class="pt-3">

    <div class="form-group {{ $errors->has('mediaCollections.course_featured_image') ? 'invalid' : '' }}">
        <label class="form-label" for="featured_image">{{ trans('cruds.course.fields.featured_image') }}</label>
        <x-dropzone id="featured_image" name="featured_image" action="{{ route('admin.courses.storeMedia') }}" collection-name="course_featured_image" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.course_featured_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.featured_image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('course.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.course.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model="course.title">
        <div class="validation-message">
            {{ $errors->first('course.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('course.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.course.fields.description') }}</label>
        <input class="form-control" type="text" name="description" id="description" wire:model="course.description">
        <div class="validation-message">
            {{ $errors->first('course.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.description_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>