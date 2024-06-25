@props([
    'first'=>'',
    'border'=>''
    ])
<div x-data="{tab: window.location.hash ? window.location.hash.substring(1) : '{{$first}}'}">

    <!-- Tabs -->
    <div class="mt-6 sm:mt-2 2xl:mt-5">
        <div class="{{$border}}">
            <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
                <nav class="-mb-px flex space-x-8" aria-label="Tabs">

                    {{$tabs}}

                </nav>
            </div>
        </div>
    </div>

    <!-- Description list -->
    <div class="mt-6 max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">
        {{$details}}
    </div>
</div>
