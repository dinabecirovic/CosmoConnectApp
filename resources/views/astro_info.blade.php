@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect</title>
    <link rel="stylesheet" href="{{ asset('../../css/astro_info.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">

</head>
<body>
    <!-- SECTION -->
        <div class="card-main">
        <div class="card">
            <a href="{{ route('milky_way') }}">
                <div class="first-img-div">
                    <img class="first-img" src="{{ asset('../../images/milky_way.jpeg') }}" alt="...">
                    <h1 class="h1">MLEČNI PUT</h1> 
                </div>
            </a>
            <a href="{{ route('stars') }}">
                <div class="first-img-div">
                    <img class="first-img" src="{{ asset('../../images/stars.jpeg') }}" alt="...">
                    <h1 class="h1">ZVEZDE</h1> 
                </div>
            </a>
            <a href="{{ route('planets') }}">
                <div class="first-img-div">
                    <img class="first-img" src="{{ asset('../../images/planets.jpeg') }}" alt="...">
                    <h1 class="h1">PLANETE</h1> 
                </div>
            </a>
        </div>
    </div>
    <script src="script.js"></script>
    <!-- SECTION END -->
</body>
</html>
@endsection