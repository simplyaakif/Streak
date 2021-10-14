@props([
    'label'=>'',
    'name'=>'',
    'error'=>''
])
<input  {{ $attributes }} type="text" name="{{$name}}" id="$label"
       autocomplete="{{$label}}" class="mt-1 block w-full
 {{ $errors->has($error) ? 'border-red-300 text-red-900 placeholder-red-300 focus:border-red-500 focus:red-500' :
 'border-blue-gray-300 text-blue-gray-900 focus:border-blue-500 focus:ring-blue-500' }}
rounded-md shadow-sm  sm:text-sm  ">
