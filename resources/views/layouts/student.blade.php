<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate"/>
    <meta http-equiv="Pragma" content="no-cache"/>
    <meta http-equiv="Expires" content="0"/>
    <link rel="stylesheet" href="{{asset('css/student.css')}}">
    <title>{{ trans('panel.site_title') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;700&display=swap" rel="stylesheet">

    {{--    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">--}}
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.2.4/dist/cdn.min.js"
            integrity="sha256-w70uaH0T7oKUdZDY2JAQDIHJbgrF37i/Z9nr9B2e3Fs=" crossorigin="anonymous"></script>
    @livewireStyles
    @stack('styles')
</head>
<body>

<x-student.navbar/>
@yield('main')

<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<x-student.footer/>
@livewireScripts
@yield('scripts')
@stack('scripts')
</body>
</html>
