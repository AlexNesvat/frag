<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css"
          integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/add.css') }}">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    @if(request()->is('account*'))
        <link rel="stylesheet" type="text/css" href="{{ asset('css/user-profile.css') }}">
    @endif
</head>

<body>
<div class="wrapper">
    <header class="header">
        <div class="header-banner">
            <div class="header-banner__text"><span>FREE Shipping </span>Over $50</div>
        </div>
        <div class="header-inner">
            <div class="container-fluid">
                <div class="header__made">
                    <img src="{{ asset('images/img-made-usa.jpg') }}" alt="">
                </div>
                <div class="header__burger">
                    <a href="#">
                        <img src="{{ asset('images/icon-burger.png') }}" alt="">
                    </a>
                </div>
                <a class="header__logo" href="index.html">
                    <img class="d-md-none" src="{{ asset('images/img-logo-mobile.png') }}" alt="">
                    <img class="d-none d-md-block" src="{{ asset('images/img-logo-desktop.png') }}" alt="">
                </a>
                <div class="header__right">
                    <div class="header__right-info">
                        <div class="header__purse">229 points</div>
                        <a class="header__login" href="#">Login </a><a class="header__search-icon" href="#"><img
                                src="{{ asset('images/icon-search.png') }}" alt=""></a><a class="header__cart" href="#">
                            <div class="header__cart-total">$0.00</div>
                            <img src="{{ asset('images/icon-cart.png') }}" alt=""></a>
                    </div>
                    <div class="header__right-banner">FREE Shipping Over $50</div>
                </div>
            </div>
        </div>
        <nav class="nav">
            <div class="container">
                <ul class="nav-list">
                    <li class="nav-list__item"><a href="#">Home</a></li>
                    <li class="nav-list__item"><a href="#">Bath Bombs</a></li>
                    <li class="nav-list__item"><a href="#">Candles</a></li>
                    <li class="nav-list__item"><a href="#">Gift Sets</a></li>
                    <li class="nav-list__item"><a href="#">Inner Circle</a></li>
                    <li class="nav-list__item nav-list__item-parent"><a href="#">Rewards</a>
                        <ul class="nav-list__dropdown">
                            <li><a href="#">Rewards Boutique</a></li>
                            <li><a href="#">Rewards Program</a></li>
                            <li><a href="#">My Points &amp; Status</a></li>
                        </ul>
                    </li>
                    <li class="nav-list__item"><a href="#">Collections</a></li>
                </ul>
            </div>
        </nav>
    </header>
