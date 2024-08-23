<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CosmoConnect</title>
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="{{ asset('../../js/dom.js') }}" defer></script>
</head>
<body>
    <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
    <div class="nav-bar">
        <ul>
            <li>
                <a href="{{ route('home') }}">Početna</a>
            </li>
            <li>
                <a href="{{ route('astro_info') }}">AstroInfo</a>
            </li>
        </ul>

        <ul>
                @if(!Auth::user())
                <li>
                    <a href="{{ route('login') }}">Prijavi se</a>
                </li>
                <li>
                    <a href="{{ route('register') }}" class="p-3">Registruj se</a>
                </li>
                @endif
                
                
                @if(Auth::user() && Auth::user()->type=='user')
                <li>
                    <a href="{{ route('my_topics') }}">Teme</a>
                </li>
                <li>
                    <a href="{{ route('my_topics2') }}">Moje teme</a>
                </li>
                <li>
                    <a href="{{ route('administrator_news') }}">Novosti</a>
                </li>
                @endif
                @if(Auth::user() && Auth::user()->type=='administrator')
                <li>
                    <a href="{{ route('administrator') }}">Korisnici</a>
                    <a href="{{ route('administrator_news') }}">Novosti</a>
                </li>
                @endif
                @if(Auth::user() && Auth::user()->type=='moderator')
                <li>
                    <a href="{{ route('moderator') }}">Teme</a>
                </li>
                <li>
                    <a href="{{ route('administrator_news') }}">Novosti</a>
                </li>
                @endif
                @if(Auth::user())
                <li>
                    <a href="{{ route('logout') }}" class="p-3">Odjavi se</a>
                </li>
                @endif
        </ul>

    </div>
    @yield('content')
    <div class="footer">
        <div class="footer-container">
            <div class="col-3">
                <h3>O NAMA</h3>
                <hr>
                <p>CosmoConnect je vertikalna socijalna mreža namenjena ljubiteljima astronomije. Platforma je osmišljena sa ciljem da korisnicima pruži mogućnost da istražuju i dele svoje iskustvo sa drugima. Korisnici mogu postavljati svoje najnovije astrofotografije s opisima zapažanja i povezati se sa drugim entuzijastima putem komentara, lajkova i deljenja u okviru zajednice.</p>
            </div>
            <div class="col-3">
                <h3>NAVIGACIJA</h3>
                <hr>
                <ul>
                    <li><a href="{{ route('home') }}">Početna</a></li>
                    <li><a href="{{ route('astro_info') }}">AstroInfo</a></li>
                    <li><a href="{{ route('register') }}">Registrujte se</a></li>
                </ul>
            </div>
            <div class="col-3">
                <h3>ASTROINFO</h3>
                <hr>
                <ul>
                    <li><a href="{{ route('milky_way') }}">Mlečni put</a></li>
                    <li><a href="{{ route('stars') }}">Zvezde</a></li>
                    <li><a href="{{ route('planets') }}">Planete</a></li>
                </ul>
            </div>
            <div class="col-3">
                <h3>PRATITE NAS</h3>
                <hr>
                <div class="social-icon">
                    <ul>
                        <li><a href="#"><i class="far fa-envelope"></i></a></li>
                        <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
