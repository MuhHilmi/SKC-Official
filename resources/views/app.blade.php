<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- Icon Tabs --}}
    <link rel="icon" type="image/png" href="{{ asset('/pic/favicon.png') }}">

    {{-- Local Style --}}
    <link rel="stylesheet" href="{{ asset('css/galerystyle.css') }}">
    <link rel="stylesheet" href="{{ asset('css/navbarstyle.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/information.css') }}">

    {{-- style css bootstrap --}}
    <link href="{{ asset('dist/css/bootstrap.min.css') }}" rel="stylesheet">

    {{-- Style tambahan per halaman --}}
    @stack('styles')

    <title>@yield('title')</title>
</head>

<body>
    <header class="navigasi container-fluid">
        @include('layout.navbar2')
    </header>
    <main>
        <div class="container-fluid">
            @yield('content')
        </div>
    </main>

    @include('layout.footer2')

    {{-- script js bootstrap --}}
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>
