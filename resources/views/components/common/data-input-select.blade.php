@props([
    'options'=>[],
    'is_skip_select'=>false,
    'error'=>'',
])
@if($is_skip_select)
    <select class="mt-1 block w-full
 {{ $errors->has($error) ? 'border-red-300 bg-red-50 disabled:cursor-not-allowed disabled:bg-gray-200 text-red-900
 placeholder-red-300
 focus:border-red-500 focus:red-500' :
 'border-blue-gray-300 text-blue-gray-900 focus:border-blue-500 focus:ring-blue-500' }}
        rounded-md shadow-sm  sm:text-sm  " {{$attributes}} >
        <option value="">Select Option</option>
        {{$slot}}
    </select>
    <p class="mt-2 text-sm text-red-600" id="email-error">{{$errors->first($error)}}</p>


@else
    <select class="mt-1 block w-full
 {{ $errors->has($error) ? 'border-red-300 bg-red-50 disabled:cursor-not-allowed disabled:bg-gray-200 text-red-900
 placeholder-red-300
 focus:border-red-500 focus:red-500' :
 'border-blue-gray-300 text-blue-gray-900 focus:border-blue-500 focus:ring-blue-500' }}
        rounded-md shadow-sm  sm:text-sm  " {{$attributes}} >
        {{$slot}}
    </select>
    <p class="mt-2 text-sm text-red-600" id="email-error">{{$errors->first($error)}}</p>

@endif
