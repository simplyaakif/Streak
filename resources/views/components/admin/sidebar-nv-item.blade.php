@props([
    'route'=>'#',
    'label'=>''
])

@if(Request::fullUrl()=== $route)
<a href="{{$route}}" class="bg-cyan-800 text-white group flex items-center px-2 py-2 text-sm leading-6 font-medium
rounded-md" x-state:on="Current" x-state:off="Default" aria-current="page" x-state-description="Current: &quot;bg-cyan-800 text-white&quot;, Default: &quot;text-cyan-100 hover:text-white hover:bg-cyan-600&quot;">
    {{$slot}}
    {{$label}}
</a>

@else
<a href="{{$route}}" class="text-cyan-100 hover:text-white hover:bg-cyan-600 group flex items-center px-2 py-2 text-sm leading-6 font-medium rounded-md" x-state-description="undefined: &quot;bg-cyan-800 text-white&quot;, undefined: &quot;text-cyan-100 hover:text-white hover:bg-cyan-600&quot;">
    {{$slot}}
    {{$label}}
</a>
@endif
