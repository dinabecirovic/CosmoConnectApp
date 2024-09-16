// reactions
document.addEventListener('DOMContentLoaded', (event) => {
    document.querySelectorAll('.reaction-button').forEach(button => {
        const id = button.getAttribute('data-id');
        const likeCountSpan = document.getElementById(`like-count-${id}`);
        const dislikeCountSpan = document.getElementById(`dislike-count-${id}`);
        
        const likeCount = localStorage.getItem(`like-count-${id}`) || 0;
        const dislikeCount = localStorage.getItem(`dislike-count-${id}`) || 0;
        
        likeCountSpan.textContent = likeCount;
        dislikeCountSpan.textContent = dislikeCount;
        
        const hasLiked = localStorage.getItem(`liked-${id}`);
        const hasDisliked = localStorage.getItem(`disliked-${id}`);

        if (hasLiked) {
            document.querySelector(`.like-button[data-id='${id}']`).disabled = true;
        }
        if (hasDisliked) {
            document.querySelector(`.dislike-button[data-id='${id}']`).disabled = true;
        }

        button.addEventListener('click', () => {
            if (button.classList.contains('like-button') && !hasLiked) {
                likeCountSpan.textContent = parseInt(likeCountSpan.textContent) + 1;
                localStorage.setItem(`like-count-${id}`, likeCountSpan.textContent);
                localStorage.setItem(`liked-${id}`, true); 
                button.disabled = true; 
            } else if (button.classList.contains('dislike-button') && !hasDisliked) {
                dislikeCountSpan.textContent = parseInt(dislikeCountSpan.textContent) + 1;
                localStorage.setItem(`dislike-count-${id}`, dislikeCountSpan.textContent);
                localStorage.setItem(`disliked-${id}`, true); 
                button.disabled = true; 
            }
        });
    });
});


//add topics
function myFunction3() {
    var x = document.getElementById("addTopics");
    if (x.style.display === "none" || x.style.display === "") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}

function previewImage(event) {
    const input = event.target;
    const reader = new FileReader();
    reader.onload = function() {
        const dataURL = reader.result;
        const output = document.getElementById('selected-image');
        output.src = dataURL;
        output.style.display = 'block';
    };
    reader.readAsDataURL(input.files[0]);
}

//dropdown menu
function toggleDropdown(button) {
    const dropdownMenu = button.nextElementSibling;
    const isVisible = dropdownMenu.style.display === 'flex';
    document.querySelectorAll('.dropdown-menu').forEach(menu => {
        menu.style.display = 'none';
    });
    dropdownMenu.style.display = isVisible ? 'none' : 'flex';
}

document.addEventListener('click', function(event) {
    const isDropdownButton = event.target.closest('.menu button');
    if (!isDropdownButton && event.target.closest('.dropdown-menu') == null) {
        document.querySelectorAll('.dropdown-menu').forEach(menu => {
            menu.style.display = 'none';
        });
    }
});