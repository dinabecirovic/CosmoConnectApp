@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect | Moderator</title>
    <link rel="stylesheet" href="{{ asset('css/astro_info.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/moderator.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="{{ asset('../../js/moderator.js') }}" defer></script>
</head>
<body>
    <!-- SECTION -->
    <section id="topics">
        <div style="text-align: center;">
            <button class="button button3"><a href="/trainees">Korisnici</a></button>
        </div>
        <div style="text-align: center;">
            <button class="button button3" onclick="myFunction3()">+ Dodaj novu temu</button>
        </div>

        <div id="addTopics" style="display:none;">
            <div class="main-topics">
                <form action="{{ route('storeT') }}" method="post" class="mt-1" enctype="multipart/form-data">
                    @csrf
                    <input type="text" name="topic_title" id="topic_title" placeholder="Naslov Teme">
                    <textarea name="topic" id="topic" rows="8" cols="50" placeholder="Tema"></textarea>
                    <input type="hidden" name="activnost" id="activnost" value="otvoren">
                    <div class="image-upload">
                        <label for="image" class="custom-file-upload">+ Kreiraj naslovnu fotografiju</label>
                        <input type="file" name="image" id="image" accept="image/*" style="display: none;" onchange="previewImage(event)">
                        <img id="selected-image" src="#" alt="Selected Image" style="display: none;"/>
                    </div>
                    <button type="submit" class="submit-btn"><i style="font-size: 40px; color: white;" class="fas fa-share-square"></i></button>
                </form>
            </div>
        </div>

        <div id="displayArea" class="haris">
            @foreach ($topics->reverse() as $t)
                <div class="topic-entry">
                    <h3>{{ $t->topic_title }}</h3>
                    <p>{{ $t->topic }}</p>
                    <img src="/images/{{ $t->image }}" alt="{{ $t->name }}" class="topic-image">
                    <p>Aktivnost: {{ $t->activity }}</p>

                    <!-- Reactions -->
                    <div class="reactions">
                        <button class="reaction-button like-button" data-id="{{ $t->id }}" onclick="this.disabled = true;">
                            <i class="fas fa-thumbs-up"></i>
                            <span class="like-count" id="like-count-{{ $t->id }}">0</span>
                        </button>
                        <button class="reaction-button dislike-button" data-id="{{ $t->id }}" onclick="this.disabled = true;">
                            <i class="fas fa-thumbs-down"></i>
                            <span class="dislike-count" id="dislike-count-{{ $t->id }}">0</span>
                        </button>
                    </div>

                    <div class="menu">
                        <button onclick="toggleDropdown(this)">&#x22EE;</button>
                        <div class="dropdown-menu">
                            <form action="{{ route('destroyT', $t->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit">Izbriši temu</button>
                            </form>
                            @if ($t->activity === 'open')
                                <form action="{{ route('closeT', $t->id) }}" method="POST">
                                    @csrf
                                    <button type="submit">Zatvori temu</button>
                                </form>
                            @endif
                            <form action="{{ route('tests', $t->id) }}" method="GET">
                                @csrf
                                <button type="submit">Anketa</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <!-- SECTION END -->
</body>
</html>

@endsection
