<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect</title>
    <link rel="stylesheet" href="{{ asset('../../css/astro_info.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

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
      
    <!-- SECTION -->
    <div class="card-header"><p class="card-header-p">Učenje i istraživanje postaju mostovi između naše ograničenosti i beskrajnosti svemira.</p></div>
    <div class="card-main">
        <div class="card">
            <a href="{{ route('milky_way') }}">
                <div class="first-img-div">
                    <img class="first-img" src="{{ asset('../../images/milky_way.jpeg') }}" alt="...">
                    <h1 class="h1">MLEČNI PUT</h1> 
                </div>
            </a>
            <a href="{{ route('stars') }}">
                <div class="first-img-div">
                    <img class="first-img" src="{{ asset('../../images/stars.jpeg') }}" alt="...">
                    <h1 class="h1">ZVEZDE</h1> 
                </div>
            </a>
            <a href="{{ route('planets') }}">
                <div class="first-img-div">
                    <img class="first-img" src="{{ asset('../../images/planets.jpeg') }}" alt="...">
                    <h1 class="h1">PLANETE</h1> 
                </div>
            </a>
        </div>
    </div>
    <script src="script.js"></script>
    <!-- SECTION END -->
    <!-- FOOTER -->
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
