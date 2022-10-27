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
                <img src="<?= URL ?>Public/Assets/QRCode/QRCode-BellonorJoaillerie.jpeg" class="qrCode" />
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
                <a href="https://www.instagram.com/bellonorjoaillier/"><img src="<?= URL ?>Public/Assets/img/ig-instagram-icon.svg" alt="logo-insta" class="mediaLogo-medias" /></a>
            </li>
            <li class="bulle">
                <a href="https://www.linkedin.com/in/bellonorjoaillier/" class="mediaLogo-medias"><img src="<?= URL ?>Public/Assets/img/linkedin-app-icon.svg" alt="logo-linkedIn" class="mediaLogo-medias" /></a>
            </li>
            <li class="bulle">
                <a href="https://www.facebook.com/bellonorjoaillierofficial/" class="mediaLogo-medias"><img src="<?= URL ?>Public/Assets/img/facebook-app-icon.svg" alt="logo-fb" class="mediaLogo-medias" /></a>
            </li>
            <li class="bulle">
                <a href="https://wa.me/0777961447?text=Bienvenue%20sur%20le%20WhatsApp%20Bellonor%20&amp;%20Bellonor%20Joaillier®" class="mediaLogo-medias"><img src="<?= URL ?>Public/Assets/img/wa-whatsapp-icon.svg" alt="logo-wa" class="mediaLogo-medias" /></a>
            </li>
            <li class="bulle">
                <a href="https://www.google.com/search?q=bellonor&rlz=1C1VDKB_frFR974FR974&oq=bellonor&aqs=chrome..69i57j46i39i175i199j0i19j69i65j69i60j69i61j69i60j69i65.9765j0j4&sourceid=chrome&ie=UTF-8#lrd=0x12b6b3310966c81d:0x9d82f6ceb955b596,1,,," class="mediaLogo-medias"><img src="<?= URL ?>Public/Assets/img/google_plus.png" alt="logo-gplus" class="mediaLogo-medias" /></a>
            </li>
        </ul>
    </div>
</div>
<div class="row row-cols-1 row-cols-md-2 g-4">
    <div class="col">
        <div class="card">
            <img src="https://picsum.photos/300/200?random=1" class="card-img-top" alt="img1">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://picsum.photos/300/200?random=2" class="card-img-top" alt="img2">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://picsum.photos/300/200?random=3" class="card-img-top" alt="img3">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
            </div>
        </div>
    </div>
    <div class="col">
        <div class="card">
            <img src="https://picsum.photos/300/200?random=4" class="card-img-top" alt="img4">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            </div>
        </div>
    </div>
</div>

<?php
$page = 'accueil';
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "Views/template.php";
