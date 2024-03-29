@props([
    'label'=>'',
    'icon'=>'',
    'can'=>'',
])
@if($can ==='')
<div x-data="{ open: false }" class="space-y-1">
    <button type="button"
            class="text-cyan-600 hover:text-white hover:bg-cyan-600 group w-full flex items-center pl-2 pr-1 py-2
            text-left text-base lg:text-sm font-medium rounded-md "
            x-state:on="Current" x-state:off="Default" aria-controls="sub-menu-1"
            @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()"
            x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
        {{$icon}}
        <span class="flex-1 text-cyan-100">
                  {{$label}}
                </span>
        <svg
            class="flex-shrink-0 h-5 w-5 transform group-hover:text-cyan-400 transition-colors ease-in-out
            duration-150 text-cyan-400 rotate-90"
            viewBox="0 0 20 20" x-state:on="Expanded" x-state:off="Collapsed" aria-hidden="true"
            :class="{ 'text-gray-400 rotate-90': open, 'text-gray-300': !(open) }">
            <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
        </svg>
    </button>
    <div x-description="Expandable link section, show/hide based on state." class="bg-cyan-900 py-2"
         id="sub-menu-1" x-show="open"
         x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
    >
        {{$slot}}
    </div>
</div>
@else
    @can($can)
    <div x-data="{ open: false }" class="space-y-1">
        <button type="button"
                class="text-cyan-600 hover:text-white hover:bg-cyan-600 group w-full flex items-center pl-2 pr-1 py-2
            text-left text-base lg:text-sm font-medium rounded-md "
                x-state:on="Current" x-state:off="Default" aria-controls="sub-menu-1"
                @click="open = !open" aria-expanded="true" x-bind:aria-expanded="open.toString()"
                x-state-description="Current: &quot;bg-gray-100 text-gray-900&quot;, Default: &quot;bg-white text-gray-600 hover:bg-gray-50 hover:text-gray-900&quot;">
            {{$icon}}
            <span class="flex-1 text-cyan-100">
                  {{$label}}
                </span>
            <svg
                class="flex-shrink-0 h-5 w-5 transform group-hover:text-cyan-400 transition-colors ease-in-out
            duration-150 text-cyan-400 rotate-90"
                viewBox="0 0 20 20" x-state:on="Expanded" x-state:off="Collapsed" aria-hidden="true"
                :class="{ 'text-gray-400 rotate-90': open, 'text-gray-300': !(open) }">
                <path d="M6 6L14 10L6 14V6Z" fill="currentColor"></path>
            </svg>
        </button>
        <div x-description="Expandable link section, show/hide based on state." class="bg-cyan-900 py-2"
             id="sub-menu-1" x-show="open"
             x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95"
             x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75"
             x-transition:leave-start="transform opacity-100 scale-100"
             x-transition:leave-end="transform opacity-0 scale-95"
        >
            {{$slot}}
        </div>
    </div>
    @endcan
@endif
