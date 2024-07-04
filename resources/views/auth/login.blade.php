@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Prijava</title>
    <link rel="stylesheet" href="{{ asset('../../css/login.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
    <script src="{{ asset('../../js/dom.js') }}" defer></script>
</head>
<body>
    <div class="login-page" style="margin-top: 150px">
        <div class="forma">
            <form action="{{ route('login') }}" class="register-form" method="POST" enctype="multipart/form-data">
                @if (Session::has('success'))
                    <div class="message">{{ Session::get('success') }}</div>
                @endif
                @if (Session::has('fail'))
                    <div class="message">{{ Session::get('fail') }}</div>
                @endif
                @csrf
                <h2>PRIJAVA</h2>
                <div>
                    <input 
                        type="text"
                        placeholder="Korisničko ime*"
                        name="username"
                        value="{{ Session::has('username') ? Session::get('username') : old('username') }}"
                        id="username"
                    >
                    <p
                        hidden 
                        id="username_error"
                        class="message"
                    >
                        Neispravno uneto korisničko ime.
                    </p>
                </div>

                <div class="password-container">
                    <input 
                        type="password"
                        placeholder="Lozinka*"
                        name="password"
                        value="{{ old('password') }}"
                        autocomplete="on"
                        class="password-input"
                        id="password-input"
                    >
                    <span class="toggle-password" onclick="togglePasswordVisibility()">
                        <i class="fas fa-eye-slash" id="eye-icon"></i>
                    </span>
                    <p
                        hidden 
                        id="password_error"
                        class="message"
                    >
                        Neispravno uneta lozinka.
                    </p>
                </div>

                <button class="btn" type="submit" onclick="handle_submit(event)" style="margin-bottom: 15px"> 
                    <span></span> 
                    <span></span> 
                    <span></span> 
                    <span></span> 
                    Prijavite se
                </button> 
            </form>
            <a href="{{ route('password.email') }}" style="color: #ccc; font-size: 10px;">Zaboravili ste lozinku?</a>
        </div>
    </div>
</body>
<script src="js/app.js"></script>
<script>
    const username = document.getElementById('username');
    const username_error = document.getElementById('username_error');

    const password = document.getElementById('password-input');
    const password_error = document.getElementById('password_error');

    const username_pattern = /^(?=[a-zA-Z0-9._]{3,20}$)(?!.*[_.]{2})[^_.].*[^_.]$/;

    const handle_submit = e => {
        let valid = true;

        if(username_pattern.test(username.value)) {
            username_error.hidden = true;
        } else {
            username_error.hidden = false;
            valid = false;
        }

        if(password.value.length >= 8) {
            password_error.hidden = true;
        } else {
            password_error.hidden = false;
            valid = false;
        }

        if(!valid) {
            e.preventDefault();
        }
    }
</script>
</html>

@endsection
