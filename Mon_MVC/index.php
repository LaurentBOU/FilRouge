<?php

session_start();

// require_once "";

define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? " https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']));

$accueilController = new AccueilController;
$ateliersController = new AteliersController;
$boutiqueController = new BoutiqueController;
$userController = new UserController; 

try {
    if (empty($_GET['page'])) {
        require "Controllers/AccueilController.php";
        $accueilController->afficherAccueilview();
    } else {
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
        switch ($url[0]) {
            case "accueil":
                require "Controllers/AccueilController.php";
                $accueilController->afficherAccueilview();
                break;
            case "ateliers":
                require "Controllers/AteliersController.php";
                
                $ateliersController->afficherAteliersview();
                break;
            case "boutique":
                require "Controllers/BoutiqueController.php";
                
                $boutiqueController->afficherBoutiqueview();
                break;
            case "connexion":
                require "Controllers/ConnexionController.php";
            
                $userController->afficherConnexionview();
                break;
            case "inscription":
                require "Controllers/InscriptionController.php";
                
                $userController->afficherInscriptionview();
                break;
            default:
                throw new Exception('Error 404, page not found');
        }
    }
} catch (Exception $e) {
    $msg = $e->getMessage();
    require "Views/erreurView.php";
}
