@props([
    'label'=>'',
    'stat'=>'',
    'icon'=>'',
    'route'=>'',
    'sublabel'=>'',
    'route_label'=>'View All',
    'can'=>'',

])
@can($can)
<div class="bg-white overflow-hidden shadow rounded-lg">
    <div class="p-5">
        <div class="flex items-center">
            <div class="flex-shrink-0">
             {{$icon}}
            </div>
            <div class="ml-5 w-0 flex-1">
                <dl>
                    <dt class="text-sm font-medium text-gray-600 truncate">
                        {{$label}}
                    </dt>
                    <dt class="text-xs font-medium text-gray-500 truncate">
                        {{$sublabel}}
                    </dt>
                    <dd>
                        <div class="text-lg font-medium text-gray-900">
                            {{$stat}}
                        </div>
                    </dd>
                </dl>
            </div>
        </div>
    </div>
    <div class="bg-gray-50 px-5 py-3">
        <div class="text-sm">
            <a href="{{$route}}" class="font-medium text-cyan-700 hover:text-cyan-900">
                {{$route_label}}
            </a>
        </div>
    </div>
</div>
@endcan
