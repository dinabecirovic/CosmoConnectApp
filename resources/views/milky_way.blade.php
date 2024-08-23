@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Mlečni put</title>
    <link rel="stylesheet" href="{{ asset('../../css/astro_info.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    
</head>
<body>
    <!-- SECTION -->
    <div class="m-w" style="margin-top: 30px; margin-bottom: 20px">
            <p>Mlečni put je velika spiralna galaksija koja uključuje Sunčev sistem, Zemlju i sve druge objekte koji orbitiraju oko Sunca. Ova galaksija ima prečnik od oko 100.000 svetlosnih godina i sastoji se od milijardi zvezda, gasa, prašine i tamne materije.
            Sunce se nalazi u jednoj od ruku spiralne strukture Mlečnog puta, poznate kao Orionova ruka. Naš solarni sistem putuje oko galaktičkog centra zajedno s drugim zvezdama, u proseku oko 220 kilometara u sekundi. Za jedan krug oko centra galaksije, Sunce i ostali objekti u našem susedstvu potrebno je oko 225 miliona godina.
            Mlečni put je dom velikog broja zvezda različitih veličina i boja, a među njima se nalazi i veliki broj planeta, uključujući Zemlju. Ova galaksija takođe sadrži oblake gasa i prašine, od kojih se formiraju nove zvezde. Tamna materija, iako nevidljiva, igra ključnu ulogu u održavanju stabilnosti i strukture Mlečnog puta. </p>
        </div>
    <div class="m-container">
        <div class="milky-container">
            <div class="m-w">
                <img class="milky-img" src="{{ asset('../../images/m-w.jpeg') }}" alt="..." style="height: 380px;">
            </div>
            <div class="m-w">
                <img class="milky-img" src="{{ asset('../../images/m-w-5.jpeg') }}" alt="...">
            </div>
            <div class="m-w">
                <img class="milky-img" src="{{ asset('../../images/m-w-4.jpeg') }}" alt="...">
            </div>
        </div>
    </div> 
    <!-- SECTION END -->
</body>
</html>
@endsection