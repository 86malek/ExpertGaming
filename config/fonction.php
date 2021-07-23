<?php 
include('define.php');

// La classe de connexion a la bdd
class Bdd {
    private static $connexion = NULL;

    public static function connectBdd() {
        if(!self::$connexion) {
            self::$connexion = new PDO(DNS, USER, PASS);
            self::$connexion -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connexion;
    }

} // Fin de la classe de connexion a la bdd
?>