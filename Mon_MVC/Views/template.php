<!DOCTYPE html>
<html lang="fr-FR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bellonor Joaillier® - Maison de joaillerie</title>

    <link rel="stylesheet" href="<?= URL ?>Public/Assets/CSS/reset.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />

    <link rel="stylesheet" href="<?= URL ?>Public/Assets/CSS/style.css" />
    <link rel="stylesheet" href="<?= URL ?>Public/Assets/CSS/styleModal.css" />
    <link rel="stylesheet" href="<?= URL ?>Public/Assets/CSS/styleAteliers.css" />
    <link rel="stylesheet" href="<?= URL ?>Public/Assets/CSS/connexion.css" />
    <link rel="stylesheet" href="<?= URL ?>Public/Assets/CSS/inscription.css" />
    <link rel="icon" class="icon" type="icon" href="<?= URL ?>Public/Assets/favicon/favicon.ico" />
    <!-- CSS Bootstrap -->

</head>

<body>
    <!----------- Header ----------->

    <nav class="navbar navbar-light">
        <div class="container-fluid col-sm-6">
            <a class="navbar-brand" href="#"><img src=<?= URL . $url_logo ?> alt="navLogo" class="navLogo img-fluid mx-auto d-block" /></a>
        </div>
        <div class="row align-items-center d-flex col-sm-6 text-center gap-5">
            <div class="col">
                <a href="<?= isset($page) && $page == 'accueil' ? '#' : 'accueil'; ?>" class="modal-btn colorNav"><?= isset($page) && $page == 'accueil' ? 'La Maison' : 'Accueil'; ?></a>
            </div>
            <div class="col">
                <a href="ateliers" class="colorNav">Les Ateliers</a>
            </div>
            <div class="col">
                <a href="boutique" class="colorNav">La Boutique</a>
            </div>
            <div class="col pe-5">
                <a href="connexion" class="colorNav">Connexion</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <?= $content; ?>

    </div>


    <footer>
        <div class="leftContainer col-4">
            <ul>
                <li>Garantie</li>
                <li>Paiement</li>
                <li>Retour & Echange</li>
                <li>Joaillier engagé</li>
            </ul>

        </div>
        <div class="midContainer col-4">
            <div class="copyright" id="copyright">
                <p>Bellonor & Bellonor Joaillier® <script>
                        document.write(new Date().getFullYear());
                    </script> Tous droits réservés.</p>
                <!-- le script me sert à afficher l'année en cours -->
            </div>
            <div class="logoHome">
                <a href="https://www.bellonorjoaillier.com/"><img src="<?= URL ?>Public/Assets/Logo/Logo-Bellonor-Bellonor-Joaillier.webp" alt="logoHome"></a>
            </div>
            <div class="divFooter">
                <a href="#">Retour haut de page</a>
            </div>
        </div>
        <div class="rightContainer col-4">
            <ul>
                <li>Conditions Générales de Vente</li>
                <li>Mentions Légales</li>
                <li>Nous Contacter</li>
                <li>Politiques de Confidentialité</li>
            </ul>

        </div>
    </footer>
    <!-- Librairie GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Script fontawesome -->
    <script src="https://kit.fontawesome.com/32e80ae84b.js" crossorigin="anonymous"></script>
    <!-- Script JS -->
    <script src="<?= URL ?>Public/Assets/JS/script.js"></script>

</body>

</html>