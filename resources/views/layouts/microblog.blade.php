<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ $title ?? "Laravel Micro Blog" }}</title>

        @vite(['resources/css/app.css', 'resources/js/app.js'])
        @livewireStyles
    </head>
    <body class="antialiased">
        {{-- <div
            x-data="{ show: true, message: 'New blog posts has been written' }"
            x-show="show"
            x-init="setTimeout(() => show = false, 5000)"
            @close.window="show=false"
            x-transition
            class="flex justify-between m-auto w-3/4 text-blue-200 shadow-inner p-3 bg-blue-600"
        >
            <p><strong>Info</strong> <span x-html="message"></span></p>
            <strong
                @click="$dispatch('close')"
                class="text-xl align-center cursor-pointer"
            >
                &times;
            </strong>
        </div> --}}

        <div class="container mx-auto p-10">
            <header class="flex justify-between items-center">
                <div class="flex items-center">
                    <x-microblog.images.laravel-logo />

                    <div class="text-3xl hidden md:block text-gray-600 font-medium ml-2 tracking-tight">
                        <a href="{{ url('/') }}">LaravelMicroBlog</a>
                    </div>

                    <livewire:search />
                </div>

                <div class="text-lg hidden md:flex space-x-6">
                    @if(Auth::check())
                        <p class="tracking-widest">{{ __('Logged as') }}: <a class="hover:text-stone-500" href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a></p>
                        <x-microblog.logout-form />
                        <a class="inline font-bold text-sm px-6 py-2 text-white rounded-full bg-red-500 hover:bg-red-600" href="{{ route('posts.create') }}">
                            {{ __('New blog post') }}
                        </a>
                    @else
                        <a class="tracking-widest hover:text-stone-500" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                        <a class="tracking-widest hover:text-stone-500" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    @endif
                </div>

                <div class="space-y-2 cursor-pointer md:hidden" id="hamburger-icon">
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                    <div class="w-8 h-0.5 bg-gray-600"></div>
                </div>
            </header>

            <div class="md:hidden">
                <div id="mobile-menu" class="flex-col items-center hidden py-8 mt-10 space-y-6 bg-white left-6 right-6 drop-shadow-lg">
                    @if (Auth::check())
                        <p class="tracking-widest">{{ __('Logged as') }}: <a class="hover:text-stone-500" href="{{ route('dashboard') }}">{{ Auth::user()->name }}</a></p>
                        <x-microblog.logout-form />
                        <a href="{{ route('posts.create') }}" class="inline font-bold text-sm px-6 py-2 text-white rounded-full bg-red-500 hover:bg-red-600">
                            {{ __('New blog post') }}
                        </a>
                    @else
                        <a class="tracking-widest hover:text-stone-500" href="{{ route('login') }}">
                            {{ __('Login') }}
                        </a>
                        <a class="tracking-widest hover:text-stone-500" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    @endif
                </div>
            </div>

            {{ $slot }}

            <footer class="flex items-center justify-center mt-12">
                &copy; 2023 LaravelMicroBlog
            </footer>
        </div>

        @livewireScripts
    </body>
</html>
