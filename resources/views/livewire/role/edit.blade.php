<form wire:submit="submit" class="pt-3">

    <div class="form-group {{ $errors->has('role.title') ? 'invalid' : '' }}">
        <label class="form-label required" for="title">{{ trans('cruds.role.fields.title') }}</label>
        <input class="form-control" type="text" name="title" id="title" required wire:model="role.title">
        <div class="validation-message">
            {{ $errors->first('role.title') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.role.fields.title_helper') }}
        </div>
    </div>
    <div class="form-group {{ $errors->has('permissions') ? 'invalid' : '' }}">
        <label class="form-label required" for="permissions">{{ trans('cruds.role.fields.permissions') }}</label>
        <x-select-list class="form-control" required id="permissions" name="permissions" wire:model.live="permissions" :options="$this->listsForFields['permissions']" multiple />
        <div class="validation-message">
            {{ $errors->first('permissions') }}
        </div>
        <div class="help-block">
            {{ trans('cruds.role.fields.permissions_helper') }}
        </div>
    </div>

    <div class="my-4">
        <h4 class="text-lg mb-4 ">Permissions</h4>
        <div class="grid grid-cols-6 gap-2">
            @foreach($options as $permission)
                <label for="permissions" class="text-sm ">
                    <input type="checkbox" name="permissions" id="permissions{{$permission->id}}"
                           wire:model="permissions"
                           value="{{$permission->id}}">
                    <span>{{ucwords(str_replace('_',' ',$permission->title))}}</span>
                </label>
            @endforeach
        </div>
    </div>


    <div class="form-group">
        <button class="btn btn-indigo mr-2" type="submit">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.roles.index') }}" class="btn btn-secondary">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
