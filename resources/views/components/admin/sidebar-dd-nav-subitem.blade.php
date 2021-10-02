@props([
    'label'=>'',
    'route'=>''
])
@if(Request::fullUrl()=== $route)
<a href="{{$route}}"
   class="group w-full  text-cyan-200 flex items-center pl-11 pr-2 py-1 text-xs font-base tracking-wide
   hover:text-cyan-200 ">
    {{$label}}
</a>
@else
<a href="{{$route}}"
   class="group w-full text-white flex items-center pl-11 pr-2 py-1 text-xs font-base tracking-wide
   hover:text-cyan-200 ">
    {{$label}}
</a>

@endif
