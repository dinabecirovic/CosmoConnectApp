<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>CosmoConnect|Administrator</title>
    <link rel="stylesheet" href="{{ asset('../../css/administrator.css') }}"> 
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
                <a href="{{ route('administrator') }}">Korisnici</a>
            </li>
            <li>
                <a href="{{ route('administrator_news') }}" class="active">Vesti</a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="{{ route('logout') }}">Odjavi se</a>
            </li>
        </ul>
    </div>
    <!-- HEADER END -->

    <!-- NEWS SECTION -->
    <section id="news">
        <div class="news-container">
        <div class="haris">
                <button id="toggle-news-form-button" class="add-news-button">+ Dodaj novu vest</button>
            </div>
            <div class="dina">
                @if(session('success'))
                    <div class="alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div id="add-news-form" class="form-container" style="display: none;">
                    <form method="POST" action="{{ route('storeNews') }}" enctype="multipart/form-data">
                        @csrf
                        <input type="text" id="title" name="title" placeholder="Naslov vesti">
                        <br>
                        <textarea id="details" name="details" placeholder="Detaljnije o vesti"></textarea>
                        <br>
                        <button type="submit" class="share">Podeli</button>
                    </form>
                </div>
            </div>
            <p class="title">Dostupne vesti</p>
        </div>
            <div class="news-items" id="news-items">
                @foreach ($news as $new)
                <div class="news-item">
                    <p class="news-id" hidden>{{ $new->id }}</p>
                    <h2>{{ $new->title }}</h2>
                    <p>{{ $new->details }}</p>
                    <p class="news-date">{{ $new->created_at }}</p>
                    <form action="{{ route('destroyNews', $new->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Ukloni vest</button>
                    </form>
                </div>
                @endforeach
            </div>
    </section>

    <!-- Inline Script -->
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const toggleButton = document.getElementById('toggle-news-form-button');
            const newsForm = document.getElementById('add-news-form');

            toggleButton.addEventListener('click', () => {
                if (newsForm.style.display === 'none' || newsForm.style.display === '') {
                    newsForm.style.display = 'flex';
                } else {
                    newsForm.style.display = 'none';
                }
            });
        });
    </script>
    <!-- NEWS SECTION END -->

    <script src="js/app.js"></script>
    <script src="js/ps.js"></script>
    <script>
      function toggleNewsForm() {
            var x = document.getElementById("add-news-form");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

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
                <div class="social-icons">
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
