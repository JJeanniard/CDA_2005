<?php
namespace Titanic\Models;

use PDO;

/**
 * Classe de type static pour faire une connection à la db (une instance par utilisateur)
 * Avec le patterne "singleton"
 * Class DbConnect
 * @package Models
 */
class DbConnect
{
    static private ?PDO $pdo = null;

    private function __construct(){} //Pour empêcher l'instanciation de la classes

    /**
     * Réalise une instance de connection, si celle-ci n'est pas déjâ realisé
     * Retourne un type PDO
     * @return PDO
     * @throws PDOException
     */
    static public function getInstance() : PDO
    {
        if(DbConnect::$pdo === null){
            DbConnect::$pdo = new PDO("mysql:localhost;port=3306;dbname=tp_agence_voyages;charset=utf8", "root", "", array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }

        return DbConnect::$pdo;
    }
}