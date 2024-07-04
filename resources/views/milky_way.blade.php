<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Mlečni put</title>
    <link rel="stylesheet" href="{{ asset('../../css/astro_info.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    
</head>
<body>
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
                <a href="/milky_way" class="active">Mlečni put</a>
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
    <!-- SECTION -->
    <div class="m-w" style="margin-top: 30px; margin-bottom: 20px">
            <p>Mlečni put je velika spiralna galaksija koja uključuje Sunčev sistem, Zemlju i sve druge objekte koji orbitiraju oko Sunca. Ova galaksija ima prečnik od oko 100.000 svetlosnih godina i sastoji se od milijardi zvezda, gasa, prašine i tamne materije.
            Sunce se nalazi u jednoj od ruku spiralne strukture Mlečnog puta, poznate kao Orionova ruka. Naš solarni sistem putuje oko galaktičkog centra zajedno s drugim zvezdama, u proseku oko 220 kilometara u sekundi. Za jedan krug oko centra galaksije, Sunce i ostali objekti u našem susedstvu potrebno je oko 225 miliona godina.
            Mlečni put je dom velikog broja zvezda različitih veličina i boja, a među njima se nalazi i veliki broj planeta, uključujući Zemlju. Ova galaksija takođe sadrži oblake gasa i prašine, od kojih se formiraju nove zvezde. Tamna materija, iako nevidljiva, igra ključnu ulogu u održavanju stabilnosti i strukture Mlečnog puta. </p>
        </div>
    <div class="m-container">
        <div class="milky-container">
            <div class="m-w">
                <img class="milky-img" src="{{ asset('../../images/m-w.jpeg') }}" alt="..." style="height: 380px;">
            </div>
            <div class="m-w">
                <img class="milky-img" src="{{ asset('../../images/m-w-5.jpeg') }}" alt="...">
            </div>
            <div class="m-w">
                <img class="milky-img" src="{{ asset('../../images/m-w-4.jpeg') }}" alt="...">
            </div>
        </div>
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
</body>
</html>
