@props([
    'label'=>'',
    'name'=>'',
])
<label for="{{$label}}" class="block text-sm font-medium text-blue-gray-900">
    {{$label}}
</label>
<input {{ $attributes }} type="text" name="{{$name}}" id="$label" autocomplete="{{$label}}" class="mt-1 block w-full
border-blue-gray-300
rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500">
