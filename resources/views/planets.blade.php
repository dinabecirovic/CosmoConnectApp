<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CosmoConnect|Planete</title>
    <link rel="stylesheet" href="{{ asset('../../css/astro_info.css') }}">
    <link rel="stylesheet" href="{{  asset('../../css/main.css') }}">
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
            <li>
                <a href="{{ route('home') }}">Početna</a>
            </li>
            <li>
                <a href="{{ route('astro_info') }}">AstroInfo</a>
            </li>
            <li>
                <a href="/planets">Planete</a>
            </li>
        </ul>

        <ul>
            <li>
                <a href="{{ route('login') }}">Prijavi se</a>
            </li>
            <li>
                <a href="{{ route('register') }}" class="p-3">Registruj se</a>
            </li>
        </ul>
    </div>
    <!-- HEADER END -->
    <!-- SECTION -->
    <div class="container">
        <video autoplay loop muted plays-inline style="height: 250px">
            <source src="{{ asset('../../images/system.mp4') }}" type="video/mp4">
        </video>
        <div class="planets">
            <div class="planet-container">
                <p class="h">Planeta Merkur</h>
                <div class="planet-position">
                    <div class="position">
                        <img class="planet-img" src="{{ asset('../../images/merkur.jpeg') }}" alt="...">
                    </div>
                    <div class="positin" style="margin-top: 25px">
                        <p>Prosečna udaljenost od Sunca iznosi otprilike 57,91 miliona kilometara. Orbitalni period Merkura (vreme koje mu je potrebno da obiđe jedan krug oko Sunca) iznosi oko 88 dana.</p>
                        <p>Merkur je najmanja planeta u Sunčevom sistemu po prečniku i masi. Prečnik mu je oko 4.880 kilometara, što je tek nešto veće od Meseca.</p>
                        <p>Rotacioni period Merkura (vreme koje mu je potrebno da se okrene oko svoje ose) traje oko 58,6 dana. Merkur ima neobičnu karakteristiku da rotira tačno dva puta tokom svog orbitnog perioda oko Sunca.</p>
                        <p>Merkur ima vrlo tanku i retku atmosferu koja se sastoji uglavnom od retkih gasova poput helijuma i vodonika. Usled slabe gravitacije, atmosfera se ne može zadržati u značajnijim količinama.</p>
                        <p>Površina Merkura je prekrivena kraterima, klisurom i ravnim ravnicama. Caloris Basin, ogroman krater, jedan je od najupečatljivijih geoloških obeležja.</p>
                        <p>Merkur gotovo da nema atmosferu, što rezultira ekstremnim temperaturnim oscilacijama između dana i noći. Tokom dana, temperatura na površini može dosegnuti 430°C, dok noću padne na -180°C.</p>
                        <p>Merkur poseduje izuzetno snažno magnetno polje u odnosu na svoju veličinu, što je još uvek predmet istraživanja i proučavanja.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="planet-container">
                <p class="h">Planeta Venera</h>
                <div class="planet-position">
                    <div class="position">
                        <img class="planet-img" src="{{ asset('../../images/venera.jpeg') }}" alt="...">
                    </div>
                    <div class="positin" style="margin-top: 25px">
                        <p>Prosečna udaljenost od Sunca iznosi otprilike 108,2 miliona kilometara, vreme koje joj je potrebno da obiđe jedan krug oko Sunca, iznosi oko 225 dana.</p>
                        <p>Venera je slične veličine kao Zemlja. Njen prečnik iznosi 12.104 kilometara. Masa Venerine atmosfere i površine zajedno je približno 81,5% mase Zemlje.</p>
                        <p>Venera ima retrogradnu rotaciju, što znači da se okreće unazad u odnosu na većinu drugih planeta u Sunčevom sistemu. Rotacija Venerine ose traje oko 243 zemaljska dana, duže od orbitalnog perioda oko Sunca.</p>
                        <p>Atmosfera Venera je gušća od Zemljine, sastoji se uglavnom od ugljen-dioksida i tragova oblaka sumporne kiseline. Visoki pritisci i visoka temperatura na površini stvaraju veoma ekstremne uslove.</p>
                        <p>Venerina površina je prekrivena vulkanima i planinama. Najveći vulkan, Maxwell Montes, i najveća planina, Ishtar Terra, čine deo njenog raznolikog reljefa.</p>
                        <p>Venera ima jednu od najviših temperatura na površini bilo koje planete u Sunčevom sistemu. Tokom dana, temperatura može dostići oko 467°C.</p>
                        <p>Venera rotira vrlo sporo oko svoje ose u odnosu na svoj orbitalni period, a taj fenomen naziva se vezana rotacija.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="planet-container">
                <p class="h">Planeta Zemlja</h>
                <div class="planet-position">
                    <div class="position">
                        <img class="planet-img" src="{{ asset('../../images/zemlja.jpeg') }}" alt="...">
                    </div>
                    <div class="positin" style="margin-top: 25px">
                        <p>Prosečna udaljenost od Sunca iznosi otprilike 149,6 miliona kilometara. Orbitalni period Zemljine orbite, vreme koje joj je potrebno da obiđe jedan krug oko Sunca, iznosi oko 365,25 dana.</p>
                        <p>Zemlja je srednje veličine planeta. Njen prečnik je oko 12.742 kilometra. Masa Zemlje iznosi približno 5,97 x 10^24 kilograma.</p>
                        <p>Zemlja rotira oko svoje ose jednom za približno 24 sata.</p>
                        <p>Atmosfera Zemlje sastoji se uglavnom od azota (oko 78%) i kiseonika (oko 21%). Ova atmosfera podržava život i štiti površinu od štetnog sunčevog zračenja.</p>
                        <p>Zemlja ima raznoliku površinu koja uključuje okeane, planine, ravnice, pustinje i druge geografske karakteristike. Život na Zemlji razvio se u različitim ekosistemima, od dubokih okeana do visokih planina.</p>
                        <p>Površinska temperatura varira u zavisnosti od geografske širine i doba godine. Prosečna temperatura površine Zemlje iznosi oko 15°C.</p>
                        <p>Zemlja rotira oko svoje ose, uzrokujući period dana i noći, ali takođe ima i revoluciju oko Sunca - smenja godišnjih doba.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="planet-container">
                <p class="h">Planeta Mars</h>
                <div class="planet-position">
                    <div class="position">
                        <img class="planet-img" src="{{ asset('../../images/mars.jpeg') }}" alt="...">
                    </div>
                    <div class="positin" style="margin-top: 25px">
                        <p>Prosečna udaljenost od Sunca je oko 227,9 miliona kilometara. Orbitalni period oko Sunca iznosi približno 687 zemaljskih dana.</p>
                        <p>Prečnik Marsa iznosi oko 6.779 kilometara, čineći ga manjim od Zemlje. Masa Marsa je oko 0,107 puta mase Zemlje.</p>
                        <p>Rotacija Marsa traje približno 24,6 zemaljskih časova. Mars ima sličan nagib ose kao i Zemlja, što uzrokuje godišnja doba.</p>
                        <p>Atmosfera Marsa je tanja u poređenju sa Zemljinom, sastoji se uglavnom od ugljen-dioksida. Na površini Marsa postoje i prašnjavi vetrovi.</p>
                        <p>Površina Marsa ima crvenkasti izgled zbog prisustva gvožđe oksida. Mars ima najviši vulkan, Olympus Mons, i najdužu kanjon, Valles Marineris, u Sunčevom sistemu.</p>
                        <p>Temperature na Marsu variraju od -87°C do 5°C.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="planet-container">
                <p class="h">Planeta Jupiter</h>
                <div class="planet-position">
                    <div class="position">
                        <img class="planet-img" src="{{ asset('../../images/jupiter.jpeg') }}" alt="...">
                    </div>
                    <div class="positin" style="margin-top: 25px">
                        <p>Prosečna udaljenost od Sunca iznosi oko 778,5 miliona kilometara. Orbitalni period oko Sunca iznosi približno 11,9 zemaljskih godina.</p>
                        <p>Jupiter je najveća planeta u Sunčevom sistemu. Prečnik mu je oko 139.820 kilometara. Masa Jupitera je oko 318 puta veća od mase Zemlje.</p>
                        <p>Jupiter ima brzu rotaciju oko svoje ose, koja traje samo oko 9,9 zemaljskih časova. Oseća se izražen oblakoviti pojas oko planete.</p>
                        <p>Atmosfera Jupitera je bogata gasovima, pretežno vodonikom i helijumom. Velike ovalne oluje, poput Velike crvene tačke, vidljive su na površini planete.</p>
                        <p>Jupiter nema tvrdu površinu poput stenovitih planeta. Umesto toga, sastoji se uglavnom od gasova i tečnosti.</p>
                        <p>Temperature na vrhu oblaka Jupitera su oko -145°C.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="planet-container">
                <p class="h">Planeta Saturn</h>
                <div class="planet-position">
                    <div class="position">
                        <img class="planet-img" src="{{ asset('../../images/saturn.jpeg') }}" alt="...">
                    </div>
                    <div class="positin" style="margin-top: 25px">
                        <p>Prosečna udaljenost od Sunca iznosi oko 1,4 milijarde kilometara. Orbitalni period oko Sunca iznosi približno 29,5 zemaljskih godina.</p>
                        <p>Saturn je druga po veličini planeta. Prečnik mu je oko 116.460 kilometara. Masa Saturna je oko 95 puta veća od mase Zemlje.</p>
                        <p>Rotacija Saturna oko svoje ose traje oko 10,7 zemaljskih časova. Saturn ima brzu rotaciju i izražene prstenove.</p>
                        <p>Atmosfera Saturna slična je Jupiterovoj, s bogatstvom gasova i oblaka. Najpoznatiji su Saturnovi prstenovi, koji su sastavljeni od leda i stena.</p>
                        <p>Saturn nema tvrdu površinu i uglavnom se sastoji od gasova i tečnosti.</p>
                        <p>Temperature na vrhu oblaka Saturna su oko -178°C.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="planet-container">
                <p class="h">Planeta Uran</h>
                <div class="planet-position">
                    <div class="position">
                        <img class="planet-img" src="{{ asset('../../images/uran.jpeg') }}" alt="...">
                    </div>
                    <div class="positin" style="margin-top: 25px">
                        <p>Prosečna udaljenost od Sunca iznosi oko 2,87 milijardi kilometara. Orbitalni period oko Sunca iznosi približno 84 zemaljske godine.</p>
                        <p>Uran je treća po veličini planeta. Prečnik mu je oko 50.724 kilometara. Masa Urana je oko 14 puta veća od mase Zemlje.</p>
                        <p>Uran ima neobičnu rotaciju - leži gotovo horizontalno, što znači da se vrlo sporo okreće oko svoje ose. Rotacija Urana traje oko 17,2 zemaljskih časova.</p>
                        <p>Atmosfera Urana sastoji se od vodonika, helijuma i metana. Plavičasta boja planete potiče od prisustva metana u atmosferi.</p>
                        <p>Uran nema čvrstu površinu i sastoji se uglavnom od gasova i tečnosti.</p>
                        <p>Temperature na vrhu oblaka Urana padaju do oko -224°C.</p>
                    </div>
                </div>
            </div>
            <hr>
            <div class="planet-container">
                <p class="h">Planeta Neptun</h>
                <div class="planet-position">
                    <div class="position">
                        <img class="planet-img" src="{{ asset('../../images/neptun.jpeg') }}" alt="...">
                    </div>
                    <div class="positin" style="margin-top: 25px">
                        <p>Prosečna udaljenost od Sunca iznosi oko 4,5 milijardi kilometara. Orbitalni period oko Sunca iznosi približno 164,8 zemaljskih godina.</p>
                        <p>Neptun je četvrta po veličini planeta. Prečnik mu je oko 49.244 kilometra. Masa Neptuna je oko 17 puta veća od mase Zemlje.</p>
                        <p>Rotacija Neptuna oko svoje ose traje oko 16,1 zemaljskih časova. Neptun ima brzu rotaciju i izražene oluje na površini.</p>
                        <p>Atmosfera Neptuna je slična atmosferi Jupitera i Saturna, s oblacima vodonika, helijuma i metana. Neptun je poznat po velikim tamnim oblacima.</p>
                        <p>Neptun, kao i ostali gasoviti divovi, nema tvrdu površinu.</p>
                        <p>Temperature na vrhu oblaka Neptuna padaju do oko -218°C.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- SECTION END -->
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
</body>
</html>
