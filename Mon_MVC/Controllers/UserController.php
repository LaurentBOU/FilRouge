<?php

class UserController
{

    public function afficherConnexionview()
    {
        $url_logo = "Public/Assets/Logo/Précieuses_Mécaniques.jpg";
        require "Views/connexionView.php";
    }

    public function afficherInscriptionview()
    {
        $url_logo = "Public/Assets/Logo/Précieuses_Mécaniques.jpg";
        require "Views/inscriptionView.php";
    }


}