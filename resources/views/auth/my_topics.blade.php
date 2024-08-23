@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect | Teme</title>
    <link rel="stylesheet" href="{{ asset('css/astro_info.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/moderator.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="{{ asset('../../js/moderator.js') }}" defer></script>
</head>
<body>
    <div class="container">
        <section id="topics">
            @foreach($notFollowedTopics as $t)
                <div id="displayArea" class="haris">
                    <div class="topic-entry">
                        <p>{{ $t->topic_title }}</p>
                        <p>{{ $t->topic }}</p>
                        <img src="/images/{{ $t->image }}" alt="{{ $t->topic_title }}" class="topic-image">
                        <form action="{{ route('follow') }}" method="POST">
                            @csrf
                            <input type="hidden" name="topic_id" value="{{ $t->id }}">
                            <div class="tooltip">
                                <button type="submit" class="follow">
                                    <i class="far fa-plus-square"></i>
                                </button>
                                <span class="tooltiptext">Zaprati temu</span>
                            </div>
                        </form>
                    </div>
                </div>
            @endforeach
        </section>
    </div>
</body>
</html>
@endsection
