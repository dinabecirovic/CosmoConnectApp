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

    //validation

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