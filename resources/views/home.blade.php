<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Početna</title>
    <link rel="stylesheet" href="{{ asset('../../css/home.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <script src="{{ asset('../../js/dom.js') }}" defer></script>
</head>
<body>
    <!-- HEADER -->
    <div class="header-position">
        <div class="header">
          <div class="hamburger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
          </div>
          <div class="nav-bar">
            <ul>
              <li>
                <a href="{{ route('home') }}" class="active">Početna</a>
              </li>
              <li>
                <a href="{{ route('astro_info') }}">AstroInfo</a>
              </li>
            </ul>
            <!--<div class="logo">
              <a href="{{ route('home') }}">
                <img src="{{ asset('../../images/logo.png') }}" alt="Logo" style="width:10rem; margin-bottom: -15px">
              </a>
            </div>-->
            <ul>
              <li>
                <a href="{{ route('login') }}">Prijavi se</a>
              </li>
              <li>
                <a href="{{ route('register') }}" class="p-3">Registruj se</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
      
   <!-- HEADER END -->
    <!-- SECTION -->
    <div class="container">
        <video autoplay loop muted plays-inline class="background-clip">
            <source src="{{ asset('../../images/home_page.mp4') }}" type="video/mp4">
        </video>
        <div class="content">
            <h1>CosmoConnect</h1>
            <p style="color: #ccc; font-size: 15px; margin-bottom: 50px;">Pridružite se istraživanju galaksija,<br> zvezda i kosmičkih pojava.</p>
        </div>
    </div>
    <!-- SECTION END -->
    <!-- COOKIE -->
        @if (!request()->cookie('accepted_cookies'))
            <div id="cookie-banner">
                <p>Ovaj sajt koristi kolačiće kako bi poboljšao korisničko iskustvo.</p>
                <button id="accept-button" onclick="acceptCookies()">Prihvati</button>
            </div>
        @endif
    <!-- COOKIE END -->
    <!-- FOOTER -->
    <div class="footer">
        <div class="footer-container">
            <div class="col-3">
                <h3>O NAMA</h3>
                <hr>
                <p>CosmoConnect je vertikalna socijalna mreža namenjena ljubiteljima astronomije. Platforma je osmišljena sa ciljem da korisnicima pruži mogućnost da istražuju i dele svoje iskustvo sa drugima. Korisnici se mogu povezati se sa drugim entuzijastima u okviru zajednice.</p>
            </div>
            <div class="col-3">
                <h3>NAVIGACIJA</h3>
                <hr>
                <ul>
                    <li><a href="{{ route('home') }}">Početna</a></li>
                    <li><a href="{{ route('astro_info') }}">AstroInfo</a></li>
                    <li><a href="{{ route('posts') }}">Objave</a></li>
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
    <!-- FOOTER END -->
</body>
</html>
