@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Zvezde</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{  asset('../../css/astro_info.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body style="background-color: #10121d;">

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('../../images/1.jpg') }}" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('../../images/2.jpg') }}" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('../../images/3.jpg') }}" alt="Third slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('../../images/4.jpg') }}" alt="Third slide">
        </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <i class="fas fa-chevron-left" aria-hidden="true"></i>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        
        <i class="fas fa-chevron-right" aria-hidden="true"></i>
        <span class="sr-only">Next</span>
    </a>
</div>
<div class="paragraph">
    <p>Zvezde su svetlosna tela koja se nalaze u ogromnom svemirskom prostranstvu. Ova velika nebeska tela nastaju iz gustih oblaka gasa i prašine, a zatim prolaze kroz različite faze svoje evolucije.</p>
    <p>Svaka zvezda proizvodi energiju unutar svog jezgra putem nuklearnih reakcija, stvarajući intenzivnu svetlost i toplotu. Različite vrste zvezda imaju različite karakteristike, uključujući veličinu, temperaturu i boju.</p>
    <p>Osim što osvetljavaju galaksije, zvezde igraju ključnu ulogu u formiranju i održavanju života u svemiru. 
    <p>Njihov životni ciklus uključuje sledeće faze: <br>
        -formiranje, boravak na glavnoj sekvenci, prelazak u crvene džinove, stvaranja belih patuljaka</li> 
    </p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
@endsection