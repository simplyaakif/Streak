<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/student.css')}}">
    @livewireStyles
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/components.js')}}"></script>

</head>
<body class="bg-gray-200">

<div class="max-w-6xl mx-auto my-10 ">
    {{--<livewire:global-search/>--}}
    @php $searchCol = 'name'; @endphp
    <livewire:admin.global-table model="QUERY" :columns="['name','courses','mobile','email','p_timings']"
         :col="$searchCol" :actions="['show','edit','delete']">
    </livewire:admin.global-table>
    {{--<livewire:datatable/>--}}
</div>

</body>
</html>
