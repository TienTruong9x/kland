<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Kland</title>
        <link rel="stylesheet" href="file:///E:/fontawesome/css/all.css">
        <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="../product-list/list-style.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
        <!-- Scripts -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
        <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>
        <script src="https://kit.fontawesome.com/95dc93da07.js"></script>
        <script src="{{ asset('js/main.js') }}" defer></script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
        <!-- Styles -->
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        

    </head>
    <body>
        
        <header>
            <nav>
                <div class="logo">
                    <a href="/"><img src="../img/logo.png" alt=""></a>
                </div>
                <ul class="nav-links">
                    <li>
                        <a href="/">Trang chủ</a>
                    </li>
                    <li>
                        <a href="/list">Nhà xưởng cho thuê</a>
                    </li>
                    <li>
                        <a href="/list">Dự án chuyển nhượng</a>
                    </li>
                    <li>
                        <a href="/list">Dự án BĐS khác</a>
                    </li>
                    <li>
                        <a href="/posts">Posts</a>
                    </li>
                    
                </ul>
                 <!-- Right Side Of Navbar -->
                    <ul class="">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->username }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                <div class="burger">
                    <div class="line1"></div>
                    <div class="line2"></div>
                    <div class="line3"></div>
                </div>
            </nav>
        </header>
        @yield('content')
        
        <footer>
            <div class="flex container">
                <div class="footer-about">
                    <h5>About Stated</h5>
                    <p>In it except to so temper mutual tastes mother. Interested cultivated its continuing now yet are. Out interested acceptance our partiality affronting unpleasant why add. </p>
                </div>
                <div class="footer-quick-links">
                    <h5>Quick Links</h5>
                    <ul>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Testimonials</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
            <small>
            Copyright &copy; 2020 All rights reserved |
            </small>
        </footer>