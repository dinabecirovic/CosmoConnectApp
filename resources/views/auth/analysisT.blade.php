<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CosmoConnect</title>
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/moderator.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="{{ asset('../../js/dom.js') }}" defer></script>
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
                <a href="{{ route('moderator') }}">Teme</a>
            </li>
            <li>
                <a href="/tests">Testovi</a>
            </li>
        </ul>
    </div>
    <!-- HEADER END -->

    <!-- SECTION -->
     <!--
    <section id="topicss" >
        <div class="card">
            <div>
                <h1>Polaznici</h1>
            </div>
        </div>
        @foreach ($topics as $t)
        @if(Session::get('login_id')==$t->IdP )
        <div>
            <p>{{$t->topic_title}}</p>
            <div>
                <h2>Prijavljeni korisnici:</h2>
                <table>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Adresa elektronske pošte</th>
                    </tr>
                    @foreach ($enrol as  $mat)
                    @if ( $mat->topic_id==$t->id)
                    <tr>
                        <td>{{  $mat->users[0]['first_name']}}</td>
                        <td>{{  $mat->users[0]['last_name']}}</td>
                        <td>{{  $mat->users[0]['email']}}</td>
                    </tr>
                @endif
                @endforeach
                </table>
            </div>
        </div>
        @endif
        @endforeach
    </section>
-->
<div class="content">
        <h1>Polaznici</h1>
        <section id="topicss">
            @foreach ($topics as $t)
            @if(Session::get('login_id')==$t->IdP )
            <div>
                <table>
                    <thead>
                        <tr>
                            <th>Tema</th>
                            <th>Ime</th>
                            <th>Prezime</th>
                            <th>Email</th>
                            <th>Ukloni</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td colspan="5" class="topic-title">{{ $t->topic_title }}</td>
                    </tr>
                    @foreach ($enrol as $mat)
                    @if ($mat->topic_id == $t->id)
                    <tr>
                        <td>{{ $t->topic_title }}</td>
                        <td>{{ $mat->users[0]['first_name']}}</td>
                        <td>{{ $mat->users[0]['last_name']}}</td>
                        <td>{{ $mat->users[0]['email']}}</td>
                        <td>
                            <form action="{{ route('removeEnrol', $mat->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="remove-btn">X</button>
                            </form>
                        </td>
                    </tr>
                    @endif
                    @endforeach
                    </tbody>
                </table>
            </div>
            @endif
            @endforeach
        </section>
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
