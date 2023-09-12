<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} | @yield('title')</title>


    {{-- Pacchetti esterni --}}
    @yield('cdns')

    <!-- Style-->
    @vite('resources/js/app.js')
</head>

<body>
    {{-- Header --}}
    @include('includes.header')

    {{-- Contenuto del MAIN che varia ad ogni PAGINA --}}
    <main class="container mt-4">
        @yield('main_content')
    </main>

    {{-- Script JS dedicati --}}
    @yield('scripts')
</body>

</html>
