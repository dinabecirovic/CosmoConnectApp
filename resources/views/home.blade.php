@extends('layouts.app')
@section('content')

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Početna</title>
    <link rel="stylesheet" href="{{ asset('../../css/home.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <script src="{{ asset('../../js/dom.js') }}" defer></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,200..1000;1,200..1000&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- SECTION -->
    <div class="container">
        <video autoplay loop muted plays-inline class="background-clip">
            <source src="{{ asset('../../images/home_page.mp4') }}" type="video/mp4">
        </video>
        <div class="content">
            <h1 class="mulish">CosmoConnect</h1>
            <p class="mulish" style="color: #ccc; font-size: 15px; margin-bottom: 50px;">Pridružite se istraživanju galaksija,<br> zvezda i kosmičkih pojava.</p>
        </div>
    </div>
    <!-- SECTION END -->
    <!-- COOKIE -->
        @if (!request()->cookie('accepted_cookies'))
            <div id="cookie-banner">
                <p>Ovaj sajt koristi kolačiće kako bi poboljšao korisničko iskustvo.</p>
                <button id="accept-button" onclick="acceptCookies()">Prihvati</button>
            </div>
        @endif
    <!-- COOKIE END -->
</body>
</html>
@endsection
