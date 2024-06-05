<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ config('app.name') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="overflow-x-hidden">
    <div class="container-login p-8 lg:py-10  lg:px-32 flex flex-col ">
        <div class="wrapper-login relative rounded-[1rem] ">
                <header class="header fixed w-full z-50">
                    <div class="hamburger_menu transition ease-in-out delay-150 z-10 bg-slate-100 w-12 lg:w-14 h-12 lg:h-14 rounded-[50%] flex flex-col gap-3 items-center justify-center relative">
                        <div class="line_1 w-4 lg:w-6 h-[2px] bg-gray-900"></div>
                        <div class="line_2 w-4 lg:w-6  h-[2px] bg-gray-900"></div>
                    </div>
                    <nav class="sidebar_menu text-[1.3rem] absolute rounded-[2rem] top-0 w-[16rem] bg-slate-100 pl-4 pr-20 pb-8 pt-24">
                        <ul class="list-none flex flex-col lg:text-lg text-[14px] uppercase">
                            <li class="px-4 rounded-2xl py-2 {{ request()->routeIs('home') ? 'font-bold' : '' }}"> <a href="{{route('home')}}">Home</a></li>
                            <li class="px-4 rounded-2xl py-2 {{ request()->routeIs('dashboard') ? 'font-bold' : '' }}"> <a href="{{route('dashboard')}}">Dashboard</a></li>
                            @auth
                            <li class="px-4 rounded-2xl py-2"> <a href="{{ route('logout') }}">Sign Out</a></li>

                            @endauth

                        </ul>

                    </nav>
                </header>

        </div>
        <main class="grid md:grid-cols-1 gap-10 lg:grid-cols-2 mt-20 lg:mt-24 place-content-between">
            @yield('content1')
        </main>
        <main class=" mt-16 ">
            @yield('content2')
        </main>
        <main class=" mt-16 ">
            @yield('content3')
        </main>
        <footer class="mt-[3rem]">
            <div class="w-full p-4 flex lg:flex-row flex-col md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline">Hafiidh™</a>. All Rights Reserved.
                </span>
                <ul class="flex items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0 gap-6">
                    <li class="rounded-lg bg-gray-950 px-8 py-3 text-white">
                        <a href="#" class="lg:text-[1rem] flex items-center text-[10px]">Let's work together!</a>
                    </li>
                    <li>
                        <a href="#" class="hover:underline md:me-6">Home</a>
                    </li>
                    <li>
                        <a href='#' class="hover:underline md:me-6">Dashboard</a>
                    </li>
                </ul>
            </div>
        </footer>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>