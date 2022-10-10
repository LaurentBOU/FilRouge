<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bellonor Joaillier® - Maison de joaillerie</title>
    <link rel="stylesheet" href="Public/Assets/CSS/reset.css" />
    <link rel="stylesheet" href="Public/Assets/CSS/style.css" />
    <link rel="stylesheet" href="Public/Assets/CSS/styleModal.css" />
    <link rel="stylesheet" href="Public/Assets/CSS/styleAteliers.css" />
    <link rel="stylesheet" href="Public/Assets/CSS/connexion.css" />
    <link rel="stylesheet" href="Public/Assets/CSS/inscription.css" />
    <link rel="icon" class="icon" type="icon" href="Public/Assets/favicon/favicon.ico" />
    <!-- CSS Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
    
</head>

<body>
    <!----------- Header ----------->

    <nav class="navbar navbar-light bg-light">
        <div class="container-fluid col-sm-6">
            <a class="navbar-brand" href="#"><img src=<?= URL . $url_logo ?> alt="navLogo" width="300" height="240" class="navLogo" /></a>
        </div>
        <div class="row align-items-center d-flex text-center gap-5">
            <div class="col">
                <a href="accueil" class="modal-btn" id="colorNav">La Maison</a>
            </div>
            <div class="col">
                <a href="ateliers" id="colorNav">Les Ateliers</a>
            </div>
            <div class="col">
                <a href="boutique" id="colorNav">La Boutique</a>
            </div>
            <div class="col pe-5">
                <a href="connexion" id="colorNav">Connexion</a>
            </div>
        </div>
    </nav>

    <div class="container">

        <?= $content; ?>

    </div>


    <footer>
        <div class="copyright" id="copyright">
            <p>Bellonor & Bellonor Joaillier® <script>
                    document.write(new Date().getFullYear());
                </script> Tous droits réservés.</p>
            <!-- le script me sert à afficher l'année en cours -->
        </div>
        <div class="logoHome"><img src="Public/Assets/Logo/Logo-Bellonor-Bellonor-Joaillier.webp" alt="logoHome"></div>
        <div class="divFooter">
            <a href="#">Retour haut de page</a>
        </div>
    </footer>
    <!-- Librairie GSAP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.2/gsap.min.js"></script>
    <!-- JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    <!-- Script JS -->
    <script src="Public/Assets/JS/script.js"></script>
    <!-- Script fontawesome -->
    <script src="https://kit.fontawesome.com/32e80ae84b.js" crossorigin="anonymous"></script>

</body>

</html>