<?php ob_start() ?>

<!-------Main------->
<h1>Boutique</h1>

<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
        Menu déroulant
    </button>
    <ul class="dropdown-menu fw-bold" aria-labelledby="dropdownMenu2">
        <li><button class="dropdown-item air fw-bold" type="button">Mon Précieux Lien®</button></li>
        <li><button class="dropdown-item terre fw-bold" type="button">Les Précieuses Mécaniques®</button></li>
        <li><button class="dropdown-item mer fw-bold" type="button">Précieuse Allure®</button></li>
    </ul>
</div>

<div class="card" style="width: 18rem;">
    <img src="<?= URL ?>Public/Assets/img/Bracelet-Or-Precieuses-Mecaniques-1.jpeg" class="card-img-top" alt="img001">
    <div class="card-body">
        <h5 class="card-title">Bracelet Or Précieuses Mécaniques</h5>
        <p class="card-text"> Or blanc 750/1000 & Or jaune 750/1000</p>
        <p class="prix_article">Prix : 2150,00€ - 2350,00€ Taxes comprises</p>
        <a href="#" class="btn btn-primary">Ajouter au panier</a>
    </div>
</div>

<?php
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "Views/template.php";
