<?php

require_once "ModelClass.php";
require_once "UserClass.php";

class UserManager extends Model
{

    private $users = [];

    public function ajoutUser($user)
    {
        $this->users[] = $user;
    }
    // public function getUserByNom($nom) {
    //     foreach($this->users as $user) {
    //         if ($user->getNom() === $nom) {
    //             return $user;
    //         }
    //     }
    // }

    public function chargementByNom($nom)
    {
        $sql = "SELECT * FROM user WHERE nom = :nom";
        $req = $this->getBdd()->prepare($sql);
        $req->execute([":nom" => $nom]);

        $data = $req->fetchAll(PDO::FETCH_OBJ);
        if ($data) {
            $user = new User($data->id,
            $data->avatar, $data->civilite, $data->nom, $data->prenom, $data->date_naissance, $data->tel, $data->mail, $data->adresse, $data->complement_adresse, $data->code_postal, $data->ville, $data->pays, $data->pseudo, $data->password);
            return $user;
        } else {
            return null;
        }
    }
}
