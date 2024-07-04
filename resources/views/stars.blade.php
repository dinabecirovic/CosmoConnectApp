<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Zvezde</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('../../css/astro_info.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body style="background-color: #10121d;">
    <!-- HEADER -->
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
            <li>
                <a href="/stars" class="active">Zvezde</a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="{{ route('login') }}">Prijavi se</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Registruj se</a>
            </li>
        </ul>
    </div>
    <!-- HEADER END -->
    <!-- SECTION END -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('../../images/1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('../../images/2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('../../images/3.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('../../images/4.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <i class="fas fa-chevron-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <i class="fas fa-chevron-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
    <div class="paragraph">
        <p>Zvezde su svetlosna tela koja se nalaze u ogromnom svemirskom prostranstvu. Ova velika nebeska tela nastaju iz gustih oblaka gasa i prašine, a zatim prolaze kroz različite faze svoje evolucije.</p>
        <p>Svaka zvezda proizvodi energiju unutar svog jezgra putem nuklearnih reakcija, stvarajući intenzivnu svetlost i toplotu. Različite vrste zvezda imaju različite karakteristike, uključujući veličinu, temperaturu i boju.</p>
        <p>Osim što osvetljavaju galaksije, zvezde igraju ključnu ulogu u formiranju i održavanju života u svemiru. 
        <p>Njihov životni ciklus uključuje sledeće faze: <br>
            -formiranje, boravak na glavnoj sekvenci, prelazak u crvene džinove, stvaranja belih patuljaka</li> 
        </p>
    </div>
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
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
