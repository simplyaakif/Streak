<div
    @if($eventClickEnabled)
        wire:click.stop="onEventClick('{{ $event['id']  }}')"
    @endif
    class="bg-white rounded-lg border py-2 px-3 shadow-md cursor-pointer">

    <p class="text-sm font-medium">
        {{ $event['title'] }}
    </p>
{{--    <p class="mt-2 text-xs">--}}
{{--        {{ $event['description'] ?? 'No description' }}--}}
{{--    </p>--}}
    <div class="flex space-x-1">
        @can('institute_calendar_show')
        <span class="w-6 h-6 rounded-full flex justify-center items-center bg-blue-50"
              wire:click.stop="show('{{ $event['id']  }}')"><x-icons.eye class="w-4 h-4 text-blue-500"/></span>
        @endcan
        @can('institute_calendar_edit')
        <span class="w-6 h-6 rounded-full flex justify-center items-center bg-green-50"
              wire:click.stop="edit('{{ $event['id']  }}')"><x-icons.edit class="w-4 h-4 text-green-500"/></span>
        @endcan
        @can('institute_calendar_delete')
        <span class="w-6 h-6 rounded-full flex justify-center items-center bg-red-50"
              wire:click.stop="delete('{{ $event['id']  }}')"><x-icons.trash class="w-4 h-4 text-red-500"/></span>
        @endcan

    </div>
</div>
