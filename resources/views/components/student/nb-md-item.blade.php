@props([
    'route'=>''
])
@if(Request::fullUrl()=== $route)
    <a href="{{$route}}" class="bg-cyan-900 text-white px-3 py-2 rounded-md text-sm font-medium">{{$slot}}</a>

@else
    <a href="{{$route}}" class="text-cyan-100 hover:bg-cyan-700 hover:text-white px-3 py-2 rounded-md text-sm
    font-medium">{{$slot}}</a>
@endif
