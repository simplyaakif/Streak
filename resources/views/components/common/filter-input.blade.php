@props([
    'label'=>''
])
<div class="rounded-lg  shadow">
    <div class="bg-gray-200 rounded-t-lg flex p-2 justify-center">
        <h4 class="text-cyan-900 text-base text-center  font-bold">{{$label}}</h4>
    </div>
    <div class="p-1 bg-white rounded-b-lg">
        <input class="w-full shadow-inner  rounded border-gray-200 text-sm" type="text">
    </div>
</div>
