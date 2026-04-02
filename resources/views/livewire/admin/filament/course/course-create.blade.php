<form wire:submit="create">
    {{ $this->form }}

    <div class="mt-6 flex items-center gap-3">
        <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
            {{ trans('global.save') }}
        </button>
        <a href="{{ route('admin.courses.index') }}" class="inline-flex items-center px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
            {{ trans('global.cancel') }}
        </a>
    </div>
</form>
