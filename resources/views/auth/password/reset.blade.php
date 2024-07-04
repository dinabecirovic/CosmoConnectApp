@extends('layouts.app')

@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Verifikacija </title>
    <link rel="stylesheet" href="{{ asset('../../css/register.css') }}">
</head>
<body>
    <div class="login-page" style="margin-top: 50px">
        <div class="forma">
            <form action="{{ route('password.reset') }}" class="register-form" method="POST" enctype="multipart/form-data">
                @csrf
                    <h2>VERIFIKACIJA</h2>
                    <div>
                        <input 
                            type="email"
                            placeholder="Adresa elektronske poste*"
                            name="email"
                            value="{{ old('email') }}"
                            required
                        >
                        @error('email')
                            <p class="message">{{ $message }}</p>
                        @enderror
                    </div>
                    <div>
                        <input 
                            type="password"
                            placeholder="Lozinka*"
                            name="password"
                            value="{{ old('password') }}"
                        >
                    </div>

                    <div>
                        <input 
                            type="password"
                            placeholder="Potvrdite lozinku*"
                            name="password_confirmation"
                            value="{{ old('password_confirmation') }}"
                        >
                    </div>
  
                <button class="btn" type="submit" style="margin-bottom: 15px"> 
                    <span></span> 
                    <span></span> 
                    <span></span> 
                    <span></span> 
                        Pošalji
                </button> 
            </form>
        </div>
    </div>
</body>
</html>
@endsection