<form wire:submit.prevent="submit" class="pt-3">

    <div class="form-group {{ $errors->has('mediaCollections.query_dp') ? 'invalid' : '' }}">
        <label class="form-label" for="dp">{{ trans('cruds.query.fields.dp') }}</label>
        <x-dropzone id="dp" name="dp" action="{{ route('admin.queries.storeMedia') }}" collection-name="query_dp" max-file-size="2" max-width="4096" max-height="4096" max-files="1" />
        <div class="validation-message">
            {{ $errors->first('mediaCollections.query_dp') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.query.fields.dp_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('query.name') ? 'invalid' : '' }}">
        <label class="form-label required" for="name">{{ trans('cruds.query.fields.name') }}</label>
        <input class="form-control" type="text" name="name" id="name" required wire:model.defer="query.name">
        <div class="validation-message">
            {{ $errors->first('query.name') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.query.fields.name_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('query.mobile') ? 'invalid' : '' }}">
        <label class="form-label required" for="mobile">{{ trans('cruds.query.fields.mobile') }}</label>
        <input class="form-control" type="text" name="mobile" id="mobile" required wire:model.defer="query.mobile">
        <div class="validation-message">
            {{ $errors->first('query.mobile') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.query.fields.mobile_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('query.email') ? 'invalid' : '' }}">
        <label class="form-label" for="email">{{ trans('cruds.query.fields.email') }}</label>
        <input class="form-control" type="email" name="email" id="email" wire:model.defer="query.email">
        <div class="validation-message">
            {{ $errors->first('query.email') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.query.fields.email_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('query.address') ? 'invalid' : '' }}">
        <label class="form-label" for="address">{{ trans('cruds.query.fields.address') }}</label>
        <textarea class="form-control" name="address" id="address" wire:model.defer="query.address" rows="4"></textarea>
        <div class="validation-message">
            {{ $errors->first('query.address') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.query.fields.address_helper') }}
        </div>
    </div>

    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.queries.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>