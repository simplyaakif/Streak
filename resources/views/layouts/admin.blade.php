<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="theme-color" content="#000000"/>

    <link rel="stylesheet" href="{{ asset('css/filament/filament/app.css') }}"/>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/filament/filament/app.css') }}"/>

    <title>{{ config('app.name') }}</title>
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://unpkg.com/dropzone@5/dist/min/dropzone.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />
{{--    <link rel="stylesheet" href="https://unpkg.com/dropzone@5/dist/min/dropzone.min.css" type="text/css" />--}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">

    <script src="{{asset('js/components.js')}}"></script>

    <style>
        [x-cloak] { display: none !important; }

        /* Fix Filament modal z-index issues - ensure modal appears above backdrop */
        .fi-modal-close-overlay {
            z-index: 40 !important;
        }
        .fi-modal-window-ctn {
            z-index: 50 !important;
            position: fixed !important;
        }
    </style>

    @livewireStyles
    @filamentStyles
    @stack('styles')
</head>

<body class="text-slate-800 antialiased">

<noscript>You need to enable JavaScript to run this app.</noscript>

<div id="app">
    <div x-data="{ open: false }" @keydown.window.escape="open = false"
         class="relative h-screen flex overflow-hidden bg-gray-100">
        <x-sidebar/>

        <div class="flex-1 overflow-auto focus:outline-none">
            <x-nav/>
            @yield('content')

            <div class="bg-white ">
                <div class="max-w-6xl p-2 px-8 flex justify-between text-sm text-gray-500 mx-auto">

                    <div>
                        Ace American Center of English
                    </div>
                    <div class="flex items-center">

                    Made with <x-icons.heart class="w-5 mx-2 h-5 text-red-600" bold/> by <span
                            class="ml-1 text-gray-700">
                         App Soulz
                    </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>

{{--@livewire('livewire-ui-spotlight')--}}
@yield('scripts')
@stack('scripts')

@livewireScripts
@filamentScripts
<script src="{{ asset('js/filament/support/support.js') }}"></script>
<script src="{{ asset('js/filament/filament/app.js') }}"></script>
<script src="{{ asset('js/filament/tables/tables.js') }}"></script>

{{--<script>--}}
{{--    function closeAlert(event) {--}}
{{--        let element = event.target;--}}
{{--        while (element.nodeName !== "BUTTON") {--}}
{{--            element = element.parentNode;--}}
{{--        }--}}
{{--        element.parentNode.parentNode.removeChild(element.parentNode);--}}
{{--    }--}}
{{--</script>--}}
</body>
</html>
