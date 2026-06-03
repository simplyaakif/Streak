<!DOCTYPE html>
<html class="h-full bg-white">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <title>{{ config('app.name') }}</title>
    @if(request()->getHost() === 'rwp.portal.ace.org.pk')
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon-rwp.svg') }}">
    @else
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}">
    @endif
    <link rel="alternate icon" href="{{ asset('favicon.ico') }}">
</head>

<body class="h-full">
        @yield('content')
</body>

</html>
