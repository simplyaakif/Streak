@props([
    'label'=>''
])
<div class="rounded-lg  shadow">
    <div class="bg-cyan-50 rounded-t-lg flex p-2 justify-center">
        <h4 class="text-cyan-900 text-sm font-medium text-center ">{{$label}}</h4>
    </div>
    <div class="p-2 bg-white rounded-b-lg ">

        {{$slot}}

    </div>
</div>
