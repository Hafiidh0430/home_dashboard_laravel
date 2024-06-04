<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ config('app.name') }}</title>
    @vite(['resources/js/app.js', 'resources/css/app.css'])
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <div class="container-login py-10 px-32 flex flex-col ">
        <div class="wrapper-login relative rounded-[1rem] ">
            <header class="header sticky z-50">
                <div class="hamburger_menu transition ease-in-out delay-150 z-10 bg-slate-100 w-14 h-14 rounded-[50%] flex flex-col gap-3 items-center justify-center relative">
                    <div class="line_1 w-6  h-[2px] bg-gray-900"></div>
                    <div class="line_2 w-6  h-[2px] bg-gray-900"></div>
                </div>
                <nav class="sidebar_menu text-[1.3rem] absolute rounded-[2rem] top-0 w-[16rem] bg-slate-100 pl-4 pr-20 pb-8 pt-24">
                    <ul class="list-none flex flex-col uppercase">
                        <li class="px-4 rounded-2xl py-2"> <a href="">Home</a></li>
                        <li class="px-4 rounded-2xl py-2"> <a href="">Dashboard</a></li>

                    </ul>

                </nav>
            </header>

        </div>
        <main class="grid md:grid-cols-1 gap-10 lg:grid-cols-2 mt-12 place-content-between">
            @yield('content1')
        </main>
        <main class=" mt-16 ">
            @yield('content2')
        </main>
        <main class=" mt-16 ">
            @yield('content3')
        </main>
        <footer class="mt-[3rem]">
            <div class="w-full mx-auto max-w-screen-xl p-4 md:flex md:items-center md:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2024 <a href="#" class="hover:underline">Hafiidh™</a>. All Rights Reserved.
                </span>
                <ul class="flex items-center mt-3 text-sm font-medium text-gray-500 dark:text-gray-400 sm:mt-0 gap-6">
                    <li class="rounded-lg bg-gray-950 px-8 py-3 text-white">
                        <a href="#" class="">Let's work together!</a>
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