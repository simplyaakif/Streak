@props([
    'title'=>'',
    'subtitle'=>null
])
<div>
    <h2 class="text-xl font-medium text-slate-900">{{$title}}</h2>
    @if($subtitle)
        <p class="mt-1 text-sm text-slate-500">This information will be displayed publicly so be careful
            what you share.</p>
    @endif
</div>
