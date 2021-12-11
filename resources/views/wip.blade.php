<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/student.css')}}">
    <style>
        [x-cloak] { display: none !important; }
    </style>

    @livewireStyles
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.8.2/dist/alpine.min.js" defer></script>
    <script src="{{asset('js/components.js')}}"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet"/>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

</head>
<body class="bg-gray-200">

<div class="max-w-6xl mx-auto my-10 ">
{{--    --}}{{--<livewire:global-search/>--}}
{{--    @php $searchCol = 'name'; @endphp--}}
{{--    <livewire:admin.global-table model="QUERY" :columns="['name','courses','mobile','email','p_timings']"--}}
{{--         :col="$searchCol" :actions="['show','edit','delete']">--}}
{{--    </livewire:admin.global-table>--}}
{{--    --}}{{--<livewire:datatable/>--}}

{{--    <livewire:livewire-table/>--}}

    <x-tabs first="profile" border="border-b border-solid border-gray-300" >
        <x-slot name="tabs">
            <x-tab tab="profile">Profile</x-tab>
            <x-tab tab="account">Account</x-tab>
        </x-slot>
        <x-slot name="details">
            <x-tab-details tab="profile">Working</x-tab-details>
            <x-tab-details tab="account">Account</x-tab-details>
        </x-slot>
    </x-tabs>


    @livewireScripts
    @yield('scripts')
    @stack('scripts')
    <script>
        function closeAlert(event) {
            let element = event.target;
            while (element.nodeName !== "BUTTON") {
                element = element.parentNode;
            }
            element.parentNode.parentNode.removeChild(element.parentNode);
        }
</div>

</body>
</html>
