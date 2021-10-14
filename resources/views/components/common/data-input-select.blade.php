@props([
    'options'=>[],
    'is_skip_select'=>false
])
<select class="mt-1 block w-full
border-blue-gray-300
rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500" {{$attributes}} >
    @if(!$is_skip_select)
    <option value="" >Select Option</option>
    @endif
    {{$slot}}
</select>
