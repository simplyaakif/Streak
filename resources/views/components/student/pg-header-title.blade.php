@props([
    'title'=>'',
    'subtitle'=>''
])
<div class="flex items-start space-x-5">
    <div class="pt-1.5">
        <h1 class="text-2xl font-bold text-gray-900">{{$title}}</h1>
        <p class="text-sm font-medium text-gray-500">{{$subtitle}}</p>
    </div>
</div>
