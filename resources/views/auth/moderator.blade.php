<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect | Moderator</title>
    <link rel="stylesheet" href="{{ asset('css/astro_info.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/moderator.css') }}"> 
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
      <li><a href="{{ route('home') }}">Početna</a></li>
      <li><a href="{{ route('astro_info') }}">AstroInfo</a></li>
    </ul>
    <ul>
      <li><a href="/analysis">Anketa</a></li>
      <li><a href="/analysisT">Izveštaj ankete</a></li>
      <li><a href="{{ route('logout') }}">Odjavi se</a></li>
    </ul>
  </div>
  <!-- HEADER END -->

  <!-- SECTION -->
  <section id="topics">
    <div style="text-align: center;">
      <button class="button button3"><a href="/analysisT">Polaznici</a></button>
    </div>
    <div id="ctn" style="text-align: center;">
      <button class="button button3" onclick="myFunction3()">+ Dodaj novu temu</button>
    </div>
    <div id="addTopics" style="display: none;">
      <div class="main-topics">
        <form action="/storeTs" method="post" class="mt-1" enctype="multipart/form-data">
          @csrf
          
          <input type="text" name="topic_title" id="topic_title" placeholder="Naslov teme">
          <p class="message">@error('topic_title'){{ "Unesite naslov teme" }}@enderror</p>

          <textarea id="topic" name="topic" placeholder="Detaljnije o temi"></textarea>
          <p class="message">@error('topic'){{ "Unesite temu" }}@enderror</p>

          <input type="hidden" name="IdP" id="IdP" value="{{ Session::get('login_id') }}">
          <input type="hidden" name="moderator_name" id="moderator_name" value="{{ Auth::check() ? Auth::user()->name : '' }}">
          <input type="hidden" name="activnost" id="activnost" value="otvoren">

          <div class="image-upload">
            <label for="image" id="upload-label" class="custom-file-upload">+ Dodaj fotografiju</label>
            <input type="file" name="image" id="image" accept="image/*" style="display: none;" onchange="previewImage(event)">
            <img id="selected-image" src="#" style="display: none; width:18rem">
            <p class="message">@error('image'){{ "Unesite naslovnu fotografiju" }}@enderror</p>
          </div>
          <button type="submit" class="submit-btn"><i style="font-size: 40px; color: white;" class="fas fa-share-square"></i></button>
        </form>
      </div>
    </div>
    <div class="haris">
      <div class="terms">
        <button type="submit" class="close-term"><i style="font-size: 30px;" class="fas fa-times fa-flip-both fa-lg" style="color: #ffffff;"></i></button>
        <div>
          <h1>Dostupne teme</h1>
        </div>
        <div id="mtemes">
          @foreach ($topics as $t)
            @if($t->activity === 'open' && Session::get('login_id') == $t->IdP)
              <div>
                <p>{{ $t->topic_name }}</p>
                <p class="price1">Tema je trenutno {{ $t->activity }}</p>
                <p>{{ $t->topic }}</p>
                <div>
                  <form action="{{ route('close_topics', $t->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                  </form>
                </div>
              </div>
            @endif
          @endforeach

          @foreach ($topics as $t)
            @if ($t->activity === 'close' && Session::get('login_id') == $t->IdP)
              <div>
                <img src="/images/{{ $t->image }}">
                <p class="price">{{ $t->name }}</p>
                <p class="price1">Tema je trenutno {{ $t->activity }}</p>
                <p>{{ $t->topic }}</p>
                <div>
                  <div>
                    <form action="{{ route('destroyT', $t->id) }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button type="submit">Izbriši vest</button>
                    </form>
                  </div>
                </div>
              </div>
            @endif
          @endforeach
        </div>
      </div>
    </div>
  </section>
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

  <script>
    function myFunction3() {
        var x = document.getElementById("addTopics");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
    }

    function previewImage(event) {
        var reader = new FileReader();
        reader.onload = function() {
            var output = document.getElementById('selected-image');
            output.src = reader.result;
            output.style.display = 'block';
        }
        reader.readAsDataURL(event.target.files[0]);
        document.getElementById('upload-label').style.display = 'none';
    }
  </script>

</body>
</html>
