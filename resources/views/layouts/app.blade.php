<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Kiwi</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <section class='px-8 py-4'>
        <header class='container mx-auto'>
            <img src="/images/logo.png" alt="">
        </header>
    </section>
    <section class='px-8'>
        <main class='container mx-auto'>
            @yield('content')
        </main>
    </section>
    <script src="https://use.fontawesome.com/68b9fee9fa.js"></script>
</body>
</html>
