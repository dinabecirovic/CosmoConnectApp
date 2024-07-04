


<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect | Moderator</title>
    <link rel="stylesheet" href="{{ asset('css/astro_info.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('../../css/moderator.css') }}"> 
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
</head>
<body>

  <!-- HEADER -->
  <div class="hamburger">
    <div class="line"></div>
    <div class="line"></div>
    <div class="line"></div>
  </div>
  <div class="nav-bar">
    <ul>
      <li><a href="{{ route('home') }}">Početna</a></li>
      <li><a href="{{ route('astro_info') }}">AstroInfo</a></li>
    </ul>
    <ul>
      <li><a href="/analysis">Anketa</a></li>
      <li><a href="/analysisT">Izveštaj ankete</a></li>
      <li><a href="{{ route('logout') }}">Odjavi se</a></li>
    </ul>
  </div>
  <!-- HEADER END -->

<!-- SECTION -->
<section id="topics">
    <div style="text-align: center;">
        <button class="button button3"><a href="/analysisT">Polaznici</a></button>
    </div>
    <div style="text-align: center;">
        <button class="button button3" onclick="myFunction3()">+ Dodaj novu temu</button>
    </div>
    <div id="addTopics">
        <div class="main-topics">
            <form action="/storeTs" method="post" class="mt-1" enctype="multipart/form-data" onsubmit="displayTopic(event)">
                @csrf
                <input type="text" name="topic_title" id="topic_title" placeholder="Naslov Teme">
                <p class="message">@error('topic_title'){{ "Unesi naslov teme." }}@enderror</p>
                <input type="text" name="topic" id="topic" placeholder="Tema:">
                <p class="message">@error('topic'){{ "Unesite temu." }}@enderror</p>
                <input type="hidden" name="IdP" id="IdP" value="{{ Session::get('login_id') }}">
                <input type="text" name="moderator_name" id="moderator_name" placeholder="Ime">
                <p class="message">@error('moderator_name'){{ "Unesite ime." }}@enderror</p>
                <input type="hidden" name="activnost" id="activnost" value="otvoren">
                <div class="image-upload">
                    <label for="image" class="custom-file-upload">+ Kreiraj naslovnu fotografiju</label>
                    <input type="file" name="image" id="image" accept="image/*" style="display: none;" onchange="previewImage(event)">
                    <img id="selected-image" src="#" alt="Selected Image" style="display: none;"/>
                    <p class="message">@error('image'){{ "Unesite naslovnu fotografiju" }}@enderror</p>
                </div>
                <button type="submit" class="submit-btn"><i style="font-size: 40px; color: white;" class="fas fa-share-square"></i></button>
            </form>
        </div>
    </div>
    <div id="displayArea" class="haris">
        <button type="submit" class="close-term"><i style="font-size: 30px;" class="fas fa-times fa-flip-both fa-lg" style="color: #ffffff;"></i></button>
        <div>
            <h1>Dostupne teme</h1>
        </div>
        <div class="terms">
            <div id="mtemes">
                @foreach ($topics as $t)
                @if($t->activity === 'open' && Session::get('login_id') == $t->IdP)
                <div class="topic-entry">
                    <p>{{ $t->topic_name }}</p>
                    <p class="price1">Tema je trenutno {{ $t->activity }}</p> 
                    <p>{{ $t->topic }}</p>
                    <div>
                        <form action="{{ route('close_topics', $t->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <button type="submit">Zatvori temu</button>
                        </form>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- SECTION END-->

  <!-- FOOTER -->
  <div class="footer">
    <div class="footer-container">
      <div class="col-3">
        <h3>O NAMA</h3>
        <hr>
        <p>CosmoConnect je vertikalna socijalna mreža namenjena ljubiteljima astronomije. Platforma je osmišljena sa ciljem da korisnicima pruži mogućnost da istražuju i dele svoje iskustvo sa drugima. Korisnici mogu postavljati svoje najnovije astrofotografije s opisima zapažanja i povezati se sa drugim entuzijastima putem komentara, lajkova i deljenja u okviru zajednice.</p>
      </div>
      <div class="col-3">
        <h3>NAVIGACIJA</h3>
        <hr>
        <ul>
          <li><a href="{{ route('home') }}">Početna</a></li>
          <li><a href="{{ route('astro_info') }}">AstroInfo</a></li>
          <li><a href="{{ route('posts') }}">Objave</a></li>
          <li><a href="{{ route('register') }}">Registrujte se</a></li>
        </ul>
      </div>
      <div class="col-3">
        <h3>ASTROINFO</h3>
        <hr>
        <ul>
          <li><a href="{{ route('milky_way') }}">Mlečni put</a></li>
          <li><a href="{{ route('stars') }}">Zvezde</a></li>
          <li><a href="{{ route('planets') }}">Planete</a></li>
        </ul>
      </div>
      <div class="col-3">
        <h3>PRATITE NAS</h3>
        <hr>
        <div class="social-icon">
          <ul>
            <li><a href="#"><i class="far fa-envelope"></i></a></li>
            <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- FOOTER END -->

  <script>
    function myFunction3() {
        var x = document.getElementById("addTopics");
        if (x.style.display === "none") {
            x.style.display = "block";
        } else {
            x.style.display = "none";
        }
      }
      document.addEventListener("DOMContentLoaded", function() {
    loadTopics();
});

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

function displayTopic(event) {
    event.preventDefault(); // Sprečava slanje forme

    // Prikupljanje podataka iz forme
    const topicTitle = document.getElementById('topic_title').value;
    const topic = document.getElementById('topic').value;
    const moderatorName = document.getElementById('moderator_name').value;
    const imageInput = document.getElementById('image');
    const image = imageInput.files[0];

    if (!image) {
        alert('Molimo odaberite fotografiju.');
        return;
    }

    const reader = new FileReader();
    reader.onload = function() {
        const dataURL = reader.result;
        const topicData = {
            title: topicTitle,
            topic: topic,
            moderator: moderatorName,
            image: dataURL
        };
        saveTopic(topicData);
        appendTopic(topicData);
    };
    reader.readAsDataURL(image);

    // Resetovanje forme nakon dodavanja
    event.target.reset();
    document.getElementById('selected-image').style.display = 'none';
}

function saveTopic(topicData) {
    let topics = JSON.parse(localStorage.getItem('topics')) || [];
    topics.push(topicData);
    localStorage.setItem('topics', JSON.stringify(topics));
}

function loadTopics() {
    const topics = JSON.parse(localStorage.getItem('topics')) || [];
    topics.forEach(topic => appendTopic(topic));
}

function appendTopic(topicData) {
    const displayArea = document.getElementById('mtemes');
    const newTopicDiv = document.createElement('div');
    newTopicDiv.classList.add('topic-entry');
    
    newTopicDiv.innerHTML = `
        <h3>${topicData.title}</h3>
        <p>Tema: ${topicData.topic}</p>
        <p>Moderator: ${topicData.moderator}</p>
        <img src="${topicData.image}" alt="Topic Image" style="max-width: 400px; max-height: 400px;"/>
        <button type="button" onclick="removeTopic(this)">Zatvori temu</button>
    `;
    displayArea.appendChild(newTopicDiv);
}

function removeTopic(button) {
    const topicDiv = button.closest('.topic-entry');
    const title = topicDiv.querySelector('h3').innerText;
    let topics = JSON.parse(localStorage.getItem('topics')) || [];
    topics = topics.filter(topic => topic.title !== title);
    localStorage.setItem('topics', JSON.stringify(topics));
    topicDiv.remove();


}

</script>

</body>
</html>

         <!-- @foreach ($topics as $t)
            @if ($t->activity === 'close' && Session::get('login_id') == $t->IdP)
              <div>
                <img src="/images/{{ $t->image }}">
                <p class="price">{{ $t->name }}</p>
                <p class="price1">Tema je trenutno {{ $t->activity }}</p>
                <p>{{ $t->topic }}</p>
                <div>
                  <form action="{{ route('destroyT', $t->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Izbriši temu</button>
                  </form>
                </div>
              </div>
            @endif
          @endforeach
-->