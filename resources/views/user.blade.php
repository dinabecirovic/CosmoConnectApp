@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>CosmoConnect|Administrator</title>
    <link rel="stylesheet" href="{{ asset('../../css/user.css') }}"> 
    <link rel="stylesheet" href="{{ asset('../../css/moderator.css') }}"> 
    <link rel="stylesheet" href="{{ asset('../../css/main.css') }}">     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>

    <!-- TOPIC SECTION -->
    <section  >
      <div>
        <h1> Dostupne teme </h1>
      </div>
      @foreach ($topics as $t )
      <div id="container">
        <div class="card">
          <img src="images/{{$t->image}}">
          <div class="card_details">
            <span class="tag">Moderator: {{$t->moderator_name}}</span>
            <div class="name">{{$t->name}}</div>
            <p>{{$t->info}}</p>
            <form action="{{ route('join') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input id="topics_id" name="topics_id" value="{{$t->id}}" hidden>
            <input id="user_id" name="user_id" value="{{Session::get('login_id')}}" hidden>       
            <button type="submit">Zaprati</button>
            </form>
          </div>    
        </div>
      </div>
      @endforeach
    </section>
    <!-- TOPIC SECTION END -->
  </body>
  <script src="js/app.js"></script>
  <script src="js/ss.js"></script>
</html>
@endsection