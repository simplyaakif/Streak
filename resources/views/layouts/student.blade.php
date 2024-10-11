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
    @filamentStyles
    @stack('styles')
</head>
<body>

<div id="popup">

</div>

<x-student.navbar/>

@yield('main')

<form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
<x-student.footer/>
@filamentScripts
@yield('scripts')
@stack('scripts')

<script>
    function notification() {
        return {
            alert: true,

            setAlert() {
                this.alert = false;
                console.log('ok');
            }
        }
    }
</script>
<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>

    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('817aa576a0959fbf792a', {
        cluster: 'ap2'
    });

    var channel = pusher.subscribe('online-class-start-notification');
    channel.bind('App\\Events\\OnlineClassStartNotificationEvent', function (data) {
        // alert(JSON.stringify(data));
        console.log(data)
        popup = `<div id="alert" x-data="notification()" aria-live="assertive" class="fixed inset-0 flex items-end px-4
py-6
pointer-events-none
sm:p-6 sm:items-start" style="z-index: 999">
    <div class="w-full flex flex-col items-center space-y-4 sm:items-end">
        <div x-show="alert" x-transition:enter="transform ease-out duration-300 transition"
        x-transition:enter-start="translate-y-2 opacity-0 sm:translate-y-0 sm:translate-x-2"
        x-transition:enter-end="translate-y-0 opacity-100 sm:translate-x-0"
        x-transition:leave="transition ease-in duration-100" x-transition:leave-start="opacity-100"
        x-transition:leave-end="opacity-0"
        class="max-w-sm w-full bg-white shadow-lg rounded-lg pointer-events-auto ring-1 ring-black ring-opacity-5">
        <div class="p-4">
        <div class="flex items-start">
        <div class="flex-shrink-0 pt-0.5">
        <img class="h-10 w-10 rounded-full"
        src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&amp;ixid=eyJhcHBfaWQiOjEyMDd9&amp;auto=format&amp;fit=facearea&amp;facepad=2.2&amp;w=160&amp;h=160&amp;q=80"
        alt="">
        </div>
        <div class="ml-3 w-0 flex-1">
        <p class="text-sm font-medium text-gray-900">
        ${data.classOptions.instructor}
        </p>
        <p class="mt-1 text-sm text-gray-500">
        Sent you an invite to join ${data.batch.title} session.
        </p>
        <div class="mt-4 flex">
<a href="{{route('student.dashboard')}}/stream/online-class/${data.batch.id}">
        <button type="button"
        class="inline-flex items-center px-3 py-2 border border-transparent shadow-sm text-sm leading-4 font-medium rounded-md text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
        Accept
        </button>
</a>
        <button @click="alert = false;" type="button"
        class="ml-3 inline-flex items-center px-3 py-2 border border-gray-300 shadow-sm text-sm leading-4 font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
        Decline
        </button>
        </div>
        </div>
        <div class="ml-4 flex-shrink-0 flex">
        <button @click="alert = false;"
        class="bg-white rounded-md inline-flex text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
        <span class="sr-only">Close</span>
        <svg class="h-5 w-5" x-description="Heroicon name: solid/x"
        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
        aria-hidden="true">
        <path fill-rule="evenodd"
        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
        clip-rule="evenodd"></path>
        </svg>
        </button>
        </div>
        </div>
        </div>
        </div>

        </div>
        </div>`

        document.getElementById('popup').innerHTML =popup;
    });
</script>

</body>
</html>
