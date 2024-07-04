/* HEADER */
let hamburger = document.querySelector(".hamburger");
console.log(hamburger);
hamburger.addEventListener("click", () => {
    let navBar = document.querySelector(".nav-bar");
    navBar.classList.toggle("active");
});
/* HEADER END */

/* POST */
document.getElementById('image').addEventListener('change', function () {
    var fileInput = this;
    var image = document.getElementById('selected-image');
    var submitBtn = document.getElementById('submit-btn');

    if (fileInput.files && fileInput.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            image.src = e.target.result;
            image.style.display = 'block'; 
        };

        reader.readAsDataURL(fileInput.files[0]);

        document.getElementById('comment').style.display = 'block';
        
        document.getElementById('upload-label').style.display = 'none';
    
        submitBtn.style.display = 'block';
    }
});

document.getElementById('upload-label').addEventListener('click', function () {
    document.getElementById('image').click();
});
/* POST END */ 

/* PASSWORD */
function togglePasswordVisibility() {
    var passwordInput = document.getElementById('password-input');
    var eyeIcon = document.getElementById('eye-icon');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eyeIcon.classList.remove('fa-eye-slash');
        eyeIcon.classList.add('fa-eye');
    } else {
        passwordInput.type = 'password';
        eyeIcon.classList.remove('fa-eye');
        eyeIcon.classList.add('fa-eye-slash');
    }
}
/* PASSWORD END */

/* COOKIE */
function acceptCookies() {
    document.cookie = "accepted_cookies=true; expires=Fri, 31 Dec 9999 23:59:59 GMT; path=/";
    document.getElementById('cookie-banner').style.display = 'none';
}
/* COOKIE END */