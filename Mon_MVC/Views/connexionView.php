<?php ob_start() ?>

<!-- -----Main------>
<div class="connexionContainer">
    <form action="index.php">
        <div class="login-box">
            <h1 class="connexionForm">Connexion</h1>
            <div class="textbox">
                <i class="fas fa-user"></i>
                <input type="text" placeholder="Nom d'utilisateur" />
            </div>

            <div class="textbox">
                <i class="fas fa-lock"></i>
                <input type="password" placeholder="Mot de passe" />
                <div class="password-icon">
                    <i class="fa fa-eye iconeye"></i>
                    <i class="fa fa-eye-slash iconeyeoff"></i>
                </div>
            </div>

            <input type="button" class="btn" value="Se connecter" />

            <div class="signup">Pas encore inscrit?
                <a href="inscription">S'inscrire maintenant</a>
            </div>
    </form>
</div>



<?php
$titre = "Page d'accueil";
$content = ob_get_clean();
require_once "Views/template.php";
