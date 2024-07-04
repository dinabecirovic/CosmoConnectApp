<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CosmoConnect|Test</title>
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
                <a href="{{ route('topics') }}">Teme</a>
            </li>
            <li>
                <a href="/analysisT">Izveštaj ankete</a>
            </li>
            <li>
                <a href="{{ route('logout') }}">Odjavi se</a>
            </li>
        </ul>
    </div>
<!-- HEADER END -->
<!-- SECTION -->
    <section id="services">
        <div id="ctn1">
            <button class="button3" style="width:100%; padding:10px" onclick="CreateTest()">Kreiraj test</button>
        </div>
        <div hidden id="addTests">
            <div class="test-form">
                <form action="{{ route('AddTest') }}" method="post">
                    @csrf
                    <label for="tid">Izaberi temu:</label>
                    <select name="tid" id="tid">
                        @foreach ($topicsU as $topic)
                            @if($topic->activity === 'open' && Session::get('login_id') == $topic->IdP)
                                <option value="{{$topic->id}}">{{$topic->topic_title}}</option>
                            @endif
                        @endforeach
                    </select>

                    <label for="test_difficulty">Težina testa:</label>
                    <select name="difficulty" id="test_difficulty">
                        <option value="easy">Lako</option>
                        <option value="medium">Srednje</option>
                        <option value="difficult">Teško</option>
                    </select>

                    <label for="name">Naziv testa:</label>
                    <input type="text" name="name" id="name">

                    <button type="submit" class="button1">Dodaj</button>
                </form>
            </div>
        </div>

        <div id="additionalTests">
            @if ($message = Session::get('success'))
                <div>
                    <h6><a href="/tests">{{$message}}</a></h6>
                </div>
            @endif

            <div hidden id="addQuestion">
                <div>
                    <form method="post" action="{{ route('createQ') }}" enctype="multipart/form-data">
                        @csrf
                        <label for="question">Pitanje:</label>
                        <input type="text" name="question" id="question">
                        <p class="message">@error('question'){{"Ovo polje je obavezno."}}@enderror</p>

                        <label for="response">Odgovor:</label>
                        <input type="text" name="response" id="response" style="margin-left: 5%; margin-right:5%; width:90%">
                        <p class="message">@error('response'){{"Ovo polje je obavezno."}}@enderror</p>

                        <button type="submit">Sačuvaj</button>
                    </form>
                </div>
            </div>

            @foreach ($tests as $test)
    @if(Session::get('login_id') == (isset($test->topics[0]) ? $test->topics[0]["IdP"] : null))
        <div>
            <p>{{$test->name}}</p>
            @if(isset($test->tests[0]["name"]))
                <p class="price1">{{$test->tests[0]["name"]}}</p>
            @endif
            <p><i>{{$test['difficulty']}}</i></p>
            <p><b>Dodata pitanja:</b></p>
            @foreach ($questions as $q)
                @if ($q->tid == $test->id)
                    <p>{{$q->pitanje}}</p>
                @endif
            @endforeach
            <div>
                <button onclick="AddQuestion({{$test->id}})">Dodaj pitanja</button>
                <form action="{{ route('destroyTest', $test->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Obriši test</button>
                </form>
            </div>
            <div class="card4">
                <h2>Rezultat testa:</h2>
                <table>
                    <tr>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>Broj tačnih:</th>
                        <th>Broj netačnih:</th>
                    </tr>
                    @foreach ($result as $r)
                        @if($r->tid == $test->id && isset($r->users[0]))
                            <tr>
                                <td>{{$r->users[0]['firstname']}}</td>
                                <td>{{$r->users[0]['lastname']}}</td>
                                <td>{{$r->yes_ans}}</td>
                                <td>{{$r->no_ans}}</td>
                            </tr>
                        @endif
                    @endforeach
                </table>
            </div>
        </div>
    @endif
@endforeach

        </div>
    </section>

    <script>
        function CreateTest() {
            document.getElementById('addTests').hidden = !document.getElementById('addTests').hidden;
        }

        function AddQuestion(testId) {
            document.getElementById('addQuestion').hidden = !document.getElementById('addQuestion').hidden;
        }
    </script>
    
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
