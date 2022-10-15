<?php

session_start();

require_once "Controllers/AccueilController.php";
require_once "Controllers/AteliersController.php";
require_once "Controllers/BoutiqueController.php";
require_once "Controllers/UserController.php";


define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

$accueilController = new AccueilController;
$ateliersController = new AteliersController;
$boutiqueController = new BoutiqueController;
$userController = new UserController;

try {
    if (empty($_GET['page'])) {

        $accueilController->afficherAccueilView();

    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case "accueil":
                $accueilController->afficherAccueilView();
                break;
            case "ateliers":
                $ateliersController->afficherAteliersView();
                break;
            case "boutique":
                $boutiqueController->afficherBoutiqueView();
                break;
            case "connexion":
                $userController->afficherConnexionView();
                break;
            case "inscription":
                $userController->afficherInscriptionView();
                break;
            default:
                throw new Exception('Error 404, page not found');
        }
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    require "Views/erreurView.php";
}
