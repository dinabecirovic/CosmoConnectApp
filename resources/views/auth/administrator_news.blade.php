@extends('layouts.app')
@section('content')

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
    <script src="{{ asset('../../js/administrator.js') }}" defer></script>
</head>
<body>
    <!-- NEWS SECTION -->
    <section id="news">
        <div class="news-container">
            @if (auth()->user()->type == 'administrator')
                <div class="haris">
                    <button id="toggle-news-form-button" class="add-news-button">+ Dodaj novu vest</button>
                </div>
            @endif
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
        </div>
        <div class="news-items" id="news-items">
            @foreach ($news as $new)
            <div class="news-item">
                <p class="news-id" hidden>{{ $new->id }}</p>
                <h2>{{ $new->title }}</h2>
                <p>{{ $new->details }}</p>
                <p class="news-date">{{ $new->created_at }}</p>
                @if (auth()->user()->type == 'administrator')
                    <form action="{{ route('destroyNews', $new->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="delete-button">Ukloni vest</button>
                    </form>
                @endif
            </div>
            @endforeach
        </div>
    </section>

    <!-- NEWS SECTION END -->

    <script src="js/app.js"></script>
    <script src="js/ps.js"></script>
</body>
</html>
@endsection
