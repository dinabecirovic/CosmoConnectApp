<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>CosmoConnect|Administrator</title>
    <link rel="stylesheet" href="{{ asset('../../css/user.css') }}"> 
    <link rel="stylesheet" href="{{ asset('../../css/moderator.css') }}"> 
    <link rel="stylesheet" href="{{ asset('../../css/main.css') }}">     
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
                <a href="/my_topics">Teme</a>
            </li>
            <li>
                <a href="/tests">Testovi</a>
            </li>
            <li>
                <a href="/analysis">Ankete</a>
            </li>
            <li>
                <a href="/administrator_news">Vesti</a>
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
    <section  >
      <div>
        <h1> Dostupne teme </h1>
      </div>
      @foreach ($topics as $t )
      <div id="container">
        <div class="card">
          <img src="images/{{$t->image}}">
          <div class="card_details">
            <span class="tag">Moderator: {{$t->moderator_name}}</span>
            <div class="name">{{$t->name}}</div>
            <p>{{$t->info}}</p>
            <form action="{{ route('join') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input id="topics_id" name="topics_id" value="{{$t->id}}" hidden>
            <input id="user_id" name="user_id" value="{{Session::get('login_id')}}" hidden>       
            <button type="submit">Zaprati</button>
            </form>
          </div>    
        </div>
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
  
    
  </body>
  <script src="js/app.js"></script>
  <script src="js/ss.js"></script>

</html>
