<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    {{--<script src="{{ asset('js/app.js') }}" defer></script>--}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin-main.css') }}" rel="stylesheet">
</head>
<body>

<div class="wrapper">

    <div class="sidebar">
        <a href="" class="sidebar-brand"></a>

        <ul class="sidebar-nav">
            <li class="sidebar-item"><a href="/admin" class="sidebar-link"><span class="align-middle">Dashboard</span></a></li>
            <li class="sidebar-item"><a href="/admin/products" class="sidebar-link"><span class="align-middle">Products</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Orders</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Subscriptions</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Customers</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Pages</span></a></li>
            <li class="sidebar-item"><a href="" class="sidebar-link"><span class="align-middle">Settings</span></a></li>
        </ul>

    </div>

    <div class="main">
        <nav class="navbar navbar-expand navbar-light bg-white">
            <a href="" class="sidebar-toggle d-flex mr-2"></a>
            <form action="" class="form-inline d-none d-sm-inline-block">
                <input class="form-control mr-sm-2" type="text" placeholder="Search projects" aria-label="Search">
            </form>
        </nav>
        <div id="app">

            @yield('section')

        </div>
    </div>

</div>

</body>
</html>
