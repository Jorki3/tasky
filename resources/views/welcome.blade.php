<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="h-screen bg-zinc-200 dark:bg-zinc-950">
    <header class="grid items-center grid-cols-2 gap-2 py-10 lg:grid-cols-3">
        <div class="flex lg:justify-center lg:col-start-2">
            <a href="https://barbagecode.com/">
                <img src="logo.jpeg" alt="BarbageCodeLogo" class="h-24 invert">
            </a>
        </div>
        @if (Route::has('login'))
            <nav class="flex justify-end flex-1 mx-3">
                @auth
                    <a href="{{ url('/dashboard') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Dashboard
                    </a>
                @else
                    <a href="{{ route('login') }}"
                        class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                        Log in
                    </a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Register
                        </a>
                    @endif
                @endauth
            </nav>
        @endif
    </header>

    <div class="flex items-center justify-center">
        <main class="max-w-2xl p-6 mx-auto text-center rounded-lg shadow-md bg-zinc-100 dark:bg-zinc-900">
            <h1 class="text-3xl font-bold text-zinc-800 dark:text-zinc-100">
                Bienvenido a TASKY
            </h1>

            <p class="mt-4 text-zinc-600 dark:text-zinc-300">
                Este es un proyecto de prueba creado con fines educativos y de experimentación. No garantizo la
                precisión, seguridad o disponibilidad de los datos ingresados. Toda la información proporcionada es
                responsabilidad
                del usuario, y no me hago responsable por pérdidas, errores o cualquier inconveniente derivado del uso
                de este proyecto.
            </p>

            <div class="mt-6">
                <a href="https://github.com/Jorki3/tasky" target="_blank" class="text-lg text-blue-600 hover:underline">
                    Visita el repositorio en GitHub
                </a>
            </div>
        </main>
    </div>

    @stack('modals')

    @livewireScripts
</body>

</html>
