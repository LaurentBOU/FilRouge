<?php ob_start() ?>

<!----------- Main ----------->

<div class="modal-container-perso">
    <div class="overlay"></div>

    <div class="modal-perso" role="dialog" aria-labelledby="modalTitle" aria-describedby="dialogDesc">
        <button aria-label="close modal-perso" class="close-modal-perso">
            X
        </button>
        <h1 id="modalTitle">La Maison Bellonor Joaillier®</h1>
        <ul id="dialogDesc">
            <li>
                <a href="https://www.bellonorjoaillier.com/">Bellonor Joaillier®</a>
            </li>
            <li>ou</li>
            <li>Scannez-moi</li>
            <li>
                <img src="Public/Assets/QRCode/QRCode-BellonorJoaillerie.jpeg" class="qrCode" />
            </li>
        </ul>
    </div>
</div>
<div class="welcome">
    <h1>
        <span>B</span><span>i</span><span>e</span><span>n</span><span>v</span><span>e</span><span>n</span><span>u</span><span>e</span>
    </h1>
</div>

<div class="super-container">
    <div class="container-first">
        <ul class="medias">
            <li class="bulle">
                <a href=""><img src="<?= URL ?>Public/Assets/img/ig-instagram-icon.svg" alt="logo-insta" class="mediaLogo-medias" /></a>
            </li>
            <li class="bulle">
                <a href="" class="mediaLogo-medias"><img src="<?= URL ?>Public/Assets/img/linkedin-app-icon.svg" alt="logo-linkedIn" class="mediaLogo-medias" /></a>
            </li>
            <li class="bulle">
                <a href="" class="mediaLogo-medias"><img src="<?= URL ?>Public/Assets/img/facebook-app-icon.svg" alt="logo-fb" class="mediaLogo-medias" /></a>
            </li>
            <li class="bulle">
                <a href="https://wa.me/0777961447?text=Bienvenue%20sur%20le%20WhatsApp%20Bellonor%20&amp;%20Bellonor%20Joaillier®" class="mediaLogo-medias"><img src="<?= URL ?>Public/Assets/img/wa-whatsapp-icon.svg" alt="logo-wa" class="mediaLogo-medias" /></a>
            </li>
            <li class="bulle">
                <a href="" class="mediaLogo-medias"><img src="<?= URL ?>Public/Assets/img/google_plus.png" alt="logo-gplus" class="mediaLogo-medias" /></a>
            </li>
        </ul>
    </div>
    <div id="carouselExampleIndicators" class="carousel slide col-10 align-items-center mx-auto" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://picsum.photos/200/300?random=1" id="img1" class="d-block w-50 align-items-center" alt="img1" />
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/200/300?random=2" id="img1" class="d-block w-50 align-items-center" alt="img2" />
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/200/300?random=3" id="img1" class="d-block w-50 align-items-center" alt="img3" />
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>

<?php
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "template.php";
