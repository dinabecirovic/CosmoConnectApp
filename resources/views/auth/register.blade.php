@extends('layouts.app')

@section ('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Registracija </title>
    <link rel="stylesheet" href="{{ asset('../../css/register.css') }}">
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
                            <option value="administrator" id="type_administrator">Administrator</option>
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
<script>
    const type = document.getElementById('type');

    if(type.value === 'user') {
        user.hidden = false;
    }
    else {
        user.hidden = true;
    }

    if(type.value === 'moderator') {
        moderator.hidden = false;
    }
    else {
        moderator.hidden = true;
    }

    if(type.value === 'administrator') {
        administrator.hidden = false;
    }
    else {
        administrator.hidden = true;
    }

    const first_name = document.getElementById('first_name');
    const first_name_error = document.getElementById('first_name_error');

    const last_name = document.getElementById('last_name');
    const last_name_error = document.getElementById('last_name_error');

    const place_of_birth = document.getElementById('place_of_birth');
    const place_of_birth_error = document.getElementById('place_of_birth_error');

    const country_of_birth = document.getElementById('country_of_birth');
    const country_of_birth_error = document.getElementById('country_of_birth_error');

    const date_of_birth = document.getElementById('date_of_birth');
    const date_of_birth_error = document.getElementById('date_of_birth_error');

    const gender = document.getElementById('gender');
    const gender_error = document.getElementById('gender_error');

    const jmbg = document.getElementById('jmbg');
    const jmbg_error = document.getElementById('jmbg_error');
    
    const mobile_phone = document.getElementById('mobile_phone');
    const mobile_phone_error = document.getElementById('mobile_phone_error');

    const email = document.getElementById('email');
    const email_error = document.getElementById('email_error');

    const username = document.getElementById('username');
    const username_error = document.getElementById('username_error');

    const password = document.getElementById('password');
    const password_error = document.getElementById('password_error');

    const password_confirmation = document.getElementById('password_confirmation');
    const password_confirmation_error = document.getElementById('password_confirmation_error');

    //VALIDATION 

    const first_name_pattern = /^[a-zA-Z]{3,16}$/;
    const last_name_pattern = /^[a-zA-Z]{3,24}$/;
    const date_of_birth_pattern = /^[0-9]{2}-[0-9]{2}-[0-9]{4}$/;
    const jmbg_pattern = /^[0-9]{13}$/;
    const email_pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/;

    const handle_submit = e => {
        let valid = true;

        if(first_name_pattern.test(first_name.value)) {
            first_name_error.hidden = true;        
        } else {
            first_name_error.hidden = false;
            valid = false;
        }

        if(last_name_pattern.test(last_name.value)) {
            last_name_error.hidden = true;
        } else {
            last_name_error.hidden = false;
            valid = false;
        }

        if(place_of_birth.value == "") {
            place_of_birth_error.hidden = false;
        } else {
            place_of_birth_error.hidden = true;
            valid = false;
        }

        if(country_of_birth.value == "") {
            country_of_birth_error.hidden = false;
        } else {
            country_of_birth_error.hidden = true;
            valid = false;
        }

        if(date_of_birth.value) {
            if (moment().diff(date_of_birth.value, 'years') >= 13) {
                date_of_birth_error.hidden = true;
            } else {
                date_of_birth_error.hidden = false;
                date_of_birth_error.innerHTML = 'Moraš biti stariji/a od 13 godina.';
                valid = false;
            }
        } 
        else {
            date_of_birth_error = false;
            valid = false;
        }

        if (gender.value === "") {
            gender_error.hidden = false;
        } 
        else {
            gender_error.hidden = true;
            valid = false;
        }
                
        if(jmbg_Pattern.test(jmbg.value)) {
            jmbg_error.hidden = true;
        }
        else {
            jmbg_error.hidden = false;
            valid = false;
        }
        
        if(mobile_phone.value == ""){
            mobile_phone_error.hidden = false;
        }
        else{
            mobile_phone_error.hidden = true;
            valid=false;
        }
        
        if (profile_picture.files.length > 0) {
            profile_picture_error.hidden = true;
        }
        else {
            profile_picture_error.hidden = false;
            valid = false;
        }

        if(email_pattern.test(email.value)) {
            email_error.hidden = true;
        } 
        else {
            email_error.hidden = false;
            valid = false;
        }

        if((password.value.length >= 8) || (password.value !== "")) {
            password_error.hidden = true;
        } 
        else {
            password_error.hidden = false;
            valid = false;
        }

        if((password.value === password_confirmation.value)) {
            password_confirmation_error.hidden = true;
        } 
        else {
            password_confirmation_error.hidden = false;
            valid = false;
        }

        if(!valid) {
            e.preventDefault();
        }
    }

</script>
</html>
@endsection
