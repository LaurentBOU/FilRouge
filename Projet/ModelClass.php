// ModelClass.php permet l'accès à la base de données.
<?php

abstract class Model
{

    private static $pdo;

    private static function setBdd()
    {
        self::$pdo = new PDO("mysql:host=localhost;dbname=(nom_base_de_données);charset=utf8", "(id_admin)", "(mot_de_passe_admin)"); //ici on met le chemin pour la base de données avec les accès de l'admin si ils sont définis.

        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
    }
    protected function getBdd()
    {
        if (self::$pdo === NULL) {
            self::setBdd();
        }
        return self::$pdo;
    }
}
