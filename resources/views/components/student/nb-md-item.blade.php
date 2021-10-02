@props([
    'route'=>''
])
@if(Request::fullUrl()=== $route)
    <a href="{{$route}}" class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium">{{$slot}}</a>

@else
    <a href="{{$route}}" class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm
    font-medium">{{$slot}}</a>
@endif
