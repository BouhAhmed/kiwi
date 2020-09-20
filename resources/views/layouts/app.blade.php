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
    <style>
        .dropdown:hover > .dropdown-content {
            display: block;
        }
    </style>
    <!-- Styles -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <section class='px-8 py-4 items-center'>
        <header class='container flex mx-auto justify-between'>
            <img src="/images/logo.png" alt="">
            <div class="dropdown">
                <img class="h-12 w-12 rounded-full" src="{{asset(Auth::user()->getAvatar())}}">
                <ul class="dropdown-content absolute hidden text-gray-700 pt-1">
                <li><a class="rounded-t bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="{{route('profile',auth()->user())}}"><i class="fa fa-user mr-4" aria-hidden="true"></i>My Account</a></li>
                    <li>
                        <form id='logout' action="{{route('logout')}}" method="post">
                            @csrf
                            <a class="bg-gray-200 hover:bg-gray-400 py-2 px-4 block whitespace-no-wrap" href="javascript:void()" onclick="document.getElementById('logout').submit();">
                                <i class="fa fa-sign-out mr-4" aria-hidden="true"></i>Logout
                            </a>
                        </form>
                    </li>
                </ul>
            </div>
        </header>

    </section>
    <section class='px-8'>
        <main class='container mx-auto'>
            @yield('content')
        </main>
    </section>
    <script src="https://use.fontawesome.com/68b9fee9fa.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/turbolinks/5.2.0/turbolinks.js" integrity="sha512-G3jAqT2eM4MMkLMyQR5YBhvN5/Da3IG6kqgYqU9zlIH4+2a+GuMdLb5Kpxy6ItMdCfgaKlo2XFhI0dHtMJjoRw==" crossorigin="anonymous"></script>
</body>
</html>
