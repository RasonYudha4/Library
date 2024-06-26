<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>
            @if (isset($pageTitle))
                {{ $pageTitle }} 
            @else 
                {{ config('app.name') }}
            @endif        
        </title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
    <div class="relative w-full lg:max-w-7xl">
        <div class="min-h-screen bg-[#181818]">
           @include('layouts.navigation')            
            <main>
                @yield('content')
            </main>
        </div>
    </div>
    </body>
</html>
