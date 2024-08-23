//users
function confirmDelete(userId) {
    if (confirm('Da li ste sigurni da želite da uklonite ovog korisnika?')) {
        document.getElementById('deleteForm' + userId).submit();
    }
}

function toggleNewsForm() {
    var x = document.getElementById("add-news-form");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

//news
document.addEventListener('DOMContentLoaded', () => {
    const toggleButton = document.getElementById('toggle-news-form-button');
    const newsForm = document.getElementById('add-news-form');

    if (toggleButton) {
        toggleButton.addEventListener('click', () => {
            if (newsForm.style.display === 'none' || newsForm.style.display === '') {
                newsForm.style.display = 'flex';
            } else {
                newsForm.style.display = 'none';
            }
        });
    }
});