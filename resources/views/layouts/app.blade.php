<!DOCTYPE html>
<html class="h-full bg-white">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/student.css') }}" />
    <title>{{ config('app.name') }}</title>
</head>

<body class="h-full">
        @yield('content')
</body>

</html>
