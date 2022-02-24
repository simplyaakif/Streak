<form wire:submit.prevent="submit" class="pt-3">

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
        <input class="form-control" type="text" name="title" id="title" required wire:model.defer="course.title">
        <div class="validation-message">
            {{ $errors->first('course.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('course.description') ? 'invalid' : '' }}">
        <label class="form-label" for="description">{{ trans('cruds.course.fields.description') }}</label>
        <input class="form-control" type="text" name="description" id="description" wire:model.defer="course.description">
        <div class="validation-message">
            {{ $errors->first('course.description') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.course.fields.description_helper') }}
        </div>
    </div>

    <div>
        <label for="">Price
        <x-common.data-input-text label="Price"
                                  error="course.price"
                                  wire:model.defer="course.price"
                                  type="number" placeholder="Course Price" />
        </label>
    </div>

    <div>
        <label for="">Duration
        <x-common.data-input-text label="Duration"
                                  error="course.duration"
                                  wire:model.defer="course.duration"
                                  type="text" placeholder="Course Duration" />
        </label>
    </div>

    <div class=" mt-12 block">
        <button class="btn btn-indigo mr-2 inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.courses.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
