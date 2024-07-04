<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>CosmoConnect | Moje teme</title>
    <link rel="stylesheet" href="{{ asset('../../css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/user.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/moderator.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <!-- HEADER -->
    <div class="hamburger-menu">
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
                <a href="/testsU">Testovi</a>
            </li>
            <li>
                <a href="/analysis">Ankete</a>
            </li>
        </ul>
        <ul>
            <li>
                <a href="{{ route('logout') }}">Odjavi se</a>
            </li>
        </ul>
    </div>
    <!-- HEADER END -->

    <!-- TOPIC SECTION -->
    <section id="topics" >
        <h1>Dostupni testovi</h1>
        @foreach ($tests as $test )
        <div class="card">
            <span class="tag"> {{$test->name}}</span>
            <div class="name">{{$test->topics[0]["name"]}}</div>
            <p> Težina: <b>{{$test['težina']}}</b></p>  
            <button id="myBtn" ><a href="{{"testpitanja/".$test['id']}}">Prikaži test</a></button></td>
        </div>
        @endforeach
    </section>
    <!-- TOPIC SECTION END -->

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
    
    <script src="js/app.js"></script>
    <script src="js/ss.js"></script>
</body>
</html>
