<?php
session_start();

require_once "controllers/LivreController.php";

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://".$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF']));

$livreController = new LivreController;

try {
    if (empty($_GET['page'])) {
        require "views/accueilView.php";
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case "accueil":
                require "views/accueilView.php";
                break;
            case "livres":
                if (empty($url[1])) {
                    $livreController->afficherLivres();
                } else if ($url[1] === "modifier") {
                    $livreController->modifierLivre($url[2]);
                } else if ($url[1] === "modifValider") {
                    $livreController->modifierLivreValider();
                } else if ($url[1] === "supprimer") {
                    $livreController->supprimerLivre($url[2]);
                } else if ($url[1] === "ajouter") {
                    $livreController->ajoutLivre();
                } else if ($url[1] === "lire") {
                    $livreController->afficherLivre($url[2]);
                } else if ($url[1] === "valider") {
                    $livreController->ajoutLivreValidation();
                } else {
                    throw new Exception('Error 404, livres not found');
                }
                break;
            default:
                throw new Exception('Error 404, page not found'); 
        }
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    require "views/erreurView.php";
}
