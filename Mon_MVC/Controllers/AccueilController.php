<?php


class AccueilController
{

    public function afficherAccueilview()
    {
        $url_logo = "Public/Assets/Logo/Précieuses_Mécaniques.jpg";
        require "Views/accueilView.php";
    }
}
