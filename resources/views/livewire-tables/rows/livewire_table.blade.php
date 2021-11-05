<x-livewire-tables::table.cell>
    {{$row->type}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
{{$row->amount}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
{{$row->paid_to}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
{{$row->created_at}}
</x-livewire-tables::table.cell>

<x-livewire-tables::table.cell>
<x-icons.trash class="w-5 h-5 text-red-700"/>
</x-livewire-tables::table.cell>
