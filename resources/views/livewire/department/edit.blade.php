<form wire:submit="submit" class="pt-3">

    <div class="form-group {{ $errors->has('department.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.department.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model="department.title">
        <div class="validation-message">
            {{ $errors->first('department.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.department.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('mediaCollections.department_featured_image') ? 'invalid' : '' }}">
        <label class="form-label" for="featured_image">{{ trans('cruds.department.fields.featured_image') }}</label>
        <x-dropzone id="featured_image" name="featured_image" action="{{ route('admin.departments.storeMedia') }}" collection-name="department_featured_image" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.department_featured_image') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.department.fields.featured_image_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('department.icon') ? 'invalid' : '' }}">
        <label class="form-label" for="icon">{{ trans('cruds.department.fields.icon') }}</label>
        <input class="form-control" type="text" name="icon" id="icon" wire:model="department.icon">
        <div class="validation-message">
            {{ $errors->first('department.icon') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.department.fields.icon_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('department.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.department.fields.description') }}</label>
        <input class="form-control" type="text" name="description" id="description" wire:model="department.description">
        <div class="validation-message">
            {{ $errors->first('department.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.department.fields.description_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.departments.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>