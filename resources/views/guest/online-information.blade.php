<!doctype html>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">

    <meta name="application-name" content="{{ config('app.name') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{ config('app.name') }}</title>

    <!-- Styles -->
    <style>[x-cloak] { display: none !important; }</style>
    @livewireStyles
    <link rel="stylesheet" href="{{ asset('css/student.css') }}">

    <!-- Scripts -->
    @livewireScripts
    <script src="{{ mix('js/filament.js') }}" defer></script>
    @stack('scripts')
</head>

<body class="antialiased">
<livewire:guest.online-registration-form/>
</body>
</html>
