@extends('layouts.app')

@section('content')
    <div class="min-h-full flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm lg:w-96">
                <div>
                    <x-logo-ace class="h-12 w-auto"/>
                    <h2 class="mt-6 text-3xl font-extrabold text-gray-900">
                        Sign in to your account
                    </h2>
                    <p class="mt-2 text-sm text-gray-600">
                        Or
                        <a href="#" class="font-medium text-cyan-600 hover:text-cyan-500">
                            register for a course
                        </a>
                    </p>
                </div>

                <div class="mt-8">

                    <div class="mt-6">
                        <form method="POST" action="{{ route('login') }}" class="space-y-6" >
                            @csrf
                            <div>
                                <label for="email" class="block text-sm font-medium text-gray-700">
                                    Email address
                                </label>
                                <div class="mt-1">
                                    <input id="email" name="email" type="email" autocomplete="email" required
                                           class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm" placeholder="{{ __('global.login_email') }}"  autofocus value="{{ old('email') }}">
                                    @error('email')
                                    <div class="text-red-500">
                                        <small>{{ $message }}</small>
                                    </div>
                                    @enderror
                                </div>
                            </div>

                            <div class="space-y-1">
                                <label for="password" class="block text-sm font-medium text-gray-700">
                                    Password
                                </label>
                                <div class="mt-1">
                                    <input id="password" name="password" type="password" autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm placeholder-gray-400 focus:outline-none focus:ring-cyan-500 focus:border-cyan-500 sm:text-sm">
                                    @error('password')
                                                                        <span class="text-red-500">
                                                                            <small>{{ $message }}</small>
                                                                        </span>
                                                                    @enderror
                                </div>
                            </div>

                            <div class="flex items-center justify-between">
                                <div class="flex items-center">
                                    <input id="remember" name="remember" type="checkbox" class="h-4 w-4
                                    text-cyan-600 focus:ring-cyan-500 border-gray-300 rounded" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="remember" class="ml-2 block text-sm text-gray-900">
                                        Remember me
                                    </label>
                                </div>

                                <div class="text-sm">
                                    @if(Route::has('password.request'))
                                    <a href="{{ route('password.request') }}" class="font-medium text-cyan-600 hover:text-cyan-500">
                                        Forgot your password?
                                    </a>
                                    @endif
                                </div>
                            </div>

                            <div>
                                <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent rounded-md shadow-sm text-sm font-medium text-white bg-cyan-600 hover:bg-cyan-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-cyan-500">
                                    Sign in
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
{{--            <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1505904267569-f02eaeb45a4c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1908&q=80" alt="">--}}
            <img class="absolute inset-0 h-full w-full object-cover" src="{{asset('images/02.jpg')}}" alt="">
        </div>
    </div>

    {{--<section class="relative w-full h-full py-40 min-h-screen">--}}
{{--    <div class="container mx-auto px-4 h-full">--}}
{{--        <div class="flex content-center items-center justify-center h-full">--}}
{{--            <div class="w-full lg:w-4/12 px-4">--}}
{{--                <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded-lg bg-slate-200 border-0">--}}
{{--                    <div class="rounded-t mb-0 px-6 py-6">--}}
{{--                        <div class="text-center mb-3">--}}
{{--                            <h6 class="text-slate-500 text-sm font-bold">--}}
{{--                                {{ __('global.login') }}--}}
{{--                            </h6>--}}
{{--                        </div>--}}
{{--                        <hr class="mt-6 border-b-1 border-slate-300" />--}}
{{--                    </div>--}}
{{--                    <div class="flex-auto px-4 lg:px-10 py-10 pt-0">--}}
{{--                        <form method="POST" action="{{ route('login') }}">--}}
{{--                            @csrf--}}
{{--                            <div class="relative w-full mb-3">--}}
{{--                                <label class="block uppercase text-slate-600 text-xs font-bold mb-2" for="email">--}}
{{--                                    {{ __('global.login_email') }}--}}
{{--                                </label>--}}
{{--                                <input id="email" name="email" type="email" class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full {{ $errors->has('email') ? ' ring ring-red-300' : '' }}" placeholder="{{ __('global.login_email') }}" required autocomplete="email" autofocus value="{{ old('email') }}" />--}}
{{--                                @error('email')--}}
{{--                                    <div class="text-red-500">--}}
{{--                                        <small>{{ $message }}</small>--}}
{{--                                    </div>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div class="relative w-full mb-3">--}}
{{--                                <label class="block uppercase text-slate-600 text-xs font-bold mb-2" for="password">--}}
{{--                                    {{ __('global.login_password') }}--}}
{{--                                </label>--}}
{{--                                <input id="password" name="password" type="password" class="border-0 px-3 py-3 placeholder-slate-300 text-slate-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full {{ $errors->has('password') ? ' ring ring-red-300' : '' }}" placeholder="{{ __('global.login_password') }}" required autocomplete="current-password" />--}}
{{--                                @error('password')--}}
{{--                                    <span class="text-red-500">--}}
{{--                                        <small>{{ $message }}</small>--}}
{{--                                    </span>--}}
{{--                                @enderror--}}
{{--                            </div>--}}
{{--                            <div>--}}
{{--                                <label class="inline-flex items-center cursor-pointer"><input id="remember" name="remember" type="checkbox" class="form-checkbox border-0 rounded text-slate-700 ml-1 w-5 h-5 ease-linear transition-all duration-150" {{ old('remember') ? 'checked' : '' }} />--}}
{{--                                    <span class="ml-2 text-sm font-semibold text-slate-600">--}}
{{--                                        {{ __('global.remember_me') }}--}}
{{--                                    </span>--}}
{{--                                </label>--}}
{{--                            </div>--}}
{{--                            <div class="text-center mt-6">--}}
{{--                                <button class="bg-slate-800 text-white active:bg-slate-600 text-sm font-bold uppercase px-6 py-3 rounded shadow hover:shadow-lg outline-none focus:outline-none mr-1 mb-1 w-full ease-linear transition-all duration-150">--}}
{{--                                    {{ __('global.login') }}--}}
{{--                                </button>--}}
{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="flex flex-wrap mt-6">--}}
{{--                    <div class="w-1/2">--}}
{{--                        @if(Route::has('password.request'))--}}
{{--                            <a href="{{ route('password.request') }}" class="text-slate-200">--}}
{{--                                <small>{{ __('global.forgot_password') }}</small>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                    <div class="w-1/2 text-right">--}}
{{--                        @if(Route::has('register'))--}}
{{--                            <a href="{{ route('register') }}" class="text-slate-200">--}}
{{--                                <small>{{ __('global.register') }}</small>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
@endsection
