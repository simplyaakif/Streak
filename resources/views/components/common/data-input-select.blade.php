@props([
    'options'=>[],
    'is_skip_select'=>false
])
@if($is_skip_select)
    <select class="mt-1 block w-full
border-blue-gray-300 disabled:cursor-not-allowed disabled:bg-gray-200
rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500" {{$attributes}} >
        <option value="">Select Option</option>
        {{$slot}}
    </select>

@else
    <select class="mt-1 block w-full
border-blue-gray-300 disabled:cursor-not-allowed disabled:bg-gray-200
rounded-md shadow-sm text-blue-gray-900 sm:text-sm focus:ring-blue-500 focus:border-blue-500" {{$attributes}} >
        {{$slot}}
    </select>
@endif
