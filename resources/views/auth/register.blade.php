@extends('layouts.app')

@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Registracija </title>
    <link rel="stylesheet" href="{{ asset('../../css/register.css') }}">
    <script src="{{ asset('../../js/register.js') }}" defer></script>
</head>
<body>
    <div class="login-page" style="margin-top: 550px">
        <div class="forma">
            <form action="{{ route('register') }}" class="register-form" method="POST" enctype="multipart/form-data">
                @csrf
                    <h2>REGISTRACIJA</h2>
                    <div>
                        <label for="type">Izaberite tip korisnika:</label>
                        <select name="type" id="type" on_change="change_account_type()" 
                        style="width: 100%; margin-bottom:20px; margin-top:20px; background-color: transparent; color: gray; height: 25px">
                            <option value="user" id="type_user">Korisnik</option>
                            <option value="moderator" id="type_moderator">Moderator</option>
                        </select>
                    </div>
                    <div>
                        <input 
                            type="text"
                            placeholder="Ime*"
                            name="first_name"
                            value="{{ old('first_name') }}"
                        >
                        <p
                            hidden 
                            id="first_name_error"
                            class="message"
                        >
                            Neispravno uneto ime.
                        </p>
                    </div>

                    <div>
                        <input 
                            type="text"
                            placeholder="Prezime*"
                            name="last_name"
                            value="{{ old('last_name') }}"
                        >
                        <p
                            hidden 
                            id="last_name_error"
                            class="message"
                        >
                            Neispravno uneto prezime.
                        </p>
                    </div>

                    <div>
                        <input 
                            type="text"
                            placeholder="Mesto rođenja*"
                            name="place_of_birth"
                            value="{{ old('place_of_birth') }}"
                        >
                        <p
                            hidden 
                            id="place_of_birth_error"
                            class="message"
                        >
                            Neispravno uneto mesto rođenja.
                        </p>
                    </div>

                    <div>
                        <input 
                            type="text"
                            placeholder="Država rođenja*"
                            name="country_of_birth"
                            value="{{ old('country_of_birth') }}"
                        >
                        <p
                            hidden 
                            id="country_of_birth_error"
                            class="message"
                        >
                            Neispravno uneta država rođenja.
                        </p>
                    </div>

                    <div>
                        <input 
                            type="date"
                            placeholder="datum rođenja*"
                            name="date_of_birth"
                            value="{{ old('date_of_birth') }}"
                            max="{{ now()->subYears(13)->format('Y-m-d') }}"
                            required
                        >
                        <p
                            hidden 
                            id="date_of_birth_error"
                            class="message"
                        >
                            Neispravno unet datum rođenja.
                        </p>
                    </div>

                    <div>
                        <select name="gender" id="gender"  
                        style="width: 100%; margin-bottom:20px; margin-top:20px; background-color: transparent; color: gray; height: 25px">
                            <option value="male">Muškarac</option>
                            <option value="female">Žena</option>
                        </select>
                        <p hidden id="gender_error" class="message">Izaberite pol.</p>
                    </div>

                    <div>
                        <input 
                            type="text"
                            placeholder="JMBG*"
                            name="jmbg"
                            value="{{ old('jmbg') }}"
                        >
                        <p
                            hidden 
                            id="jmbg_error"
                            class="message"
                        >
                            Neispravno unet matični broj.
                        </p>
                    </div>

                    <div>
                        <input 
                            type="tel"
                            placeholder="Kontakt mobilni telefon*"
                            name="mobile_phone"
                            value="{{ old('mobile_phone') }}"
                        >
                        <p
                            hidden 
                            id="mobile_phone_error"
                            class="message"
                        >
                            Neispravno unet kontakt mobilni telefon.
                        </p>
                    </div>

                    <div>
                        <input 
                            type="email"
                            placeholder="Adresa elektronse pošte*"
                            name="email"
                            value="{{ old('email') }}"
                        >
                        <p
                            hidden 
                            id="email_error"
                            class="message"
                        >
                            Neispravno uneta adresa elektronse pošte.
                        </p>
                    </div>

                <!-- 
                    <div>
                        <input 
                            type="username"
                            placeholder="Korisničko ime*"
                            name="username"
                            value="{{ old('username') }}"
                        >
                        <p
                            hidden 
                            id="username_error"
                            class="message"
                        >
                            Neispravno uneto korisničko ime.
                        </p>
                    </div>
                -->
                    <div>
                        <input 
                            type="password"
                            placeholder="Lozinka*"
                            name="password"
                            value="{{ old('password') }}"
                        >
                        <p
                            hidden 
                            id="password_error"
                            class="message"
                        >
                            Neispravno uneta lozinka.
                        </p>
                    </div>

                    <div>
                        <input 
                            type="password"
                            placeholder="Potvrdite lozinku*"
                            name="password_confirmation"
                            value="{{ old('password_confirmation') }}"
                        >
                        <p
                            hidden 
                            id="password_confirmation_error"
                            class="message"
                        >
                            Neispravno uneta potvrda lozinke.
                        </p>
                    </div>

                    <div>
                        <input 
                            type="file"
                            name="profile_picture"
                            value="{{ old('profile_picture') }}"
                        >
                        <p
                            hidden 
                            id="profile_picture"
                            class="message"
                        >
                            Unesite svoju fotografiju.
                        </p>
                    </div>

                    <button class="btn" type="submit" onclick="handle_submit(event)"> 
                        <span></span> 
                        <span></span> 
                        <span></span> 
                        <span></span> 
                        Registrujte se 
                    </button> 
                    <p class="message2" style="color: gray; margin-top: 15px">
                        Već ste registrovani? 
                        <a href="{{ route('login') }}" style="color: white">
                            Prijavite se
                        </a>
                    </p>
                </form>
            </div>
        </div>   
</body>
<script src="js/app.js"></script>
</html>
@endsection
