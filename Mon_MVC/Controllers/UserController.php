<?php

class UserController
{

    public function afficherConnexionView()
    {
        $url_logo = "Public/Assets/Logo/Précieuses_Mécaniques.jpg";
        require "Views/connexionView.php";
    }

    public function afficherInscriptionView()
    {
        $url_logo = "Public/Assets/Logo/Précieuses_Mécaniques.jpg";
        require "Views/inscriptionView.php";
    }


}