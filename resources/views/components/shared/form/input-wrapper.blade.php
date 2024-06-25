@props([
    'label'=>'',
    'name'=>''
])

<div>
    <label class="form-label required" for="{{$name}}">{{$label}}</label>
    {{$slot}}
</div>
