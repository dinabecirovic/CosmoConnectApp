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