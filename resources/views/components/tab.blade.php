@props([
    'tab'=>'',
])
<a :class="{ 'border-cyan-500 border-b-2 text-gray-900': tab === '{{$tab}}' }"
   @click.prevent="tab = '{{$tab}}'; window.location.hash = '{{$tab}}'" href="#"
   class=" text-gray-500 whitespace-nowrap py-4 px-1
                        font-medium text-sm" x-state:on="Current" x-state:off="Default" aria-current="page"
   x-state-description="Current: &quot;border-cyan-500 text-gray-900&quot;, Default: &quot;border-transparent text-gray-500 hover:text-gray-700 hover:border-gray-300&quot;">
    {{$slot}}
</a>
