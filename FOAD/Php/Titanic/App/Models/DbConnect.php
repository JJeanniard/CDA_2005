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
    private static ?PDO $pdo = null;

    private function __construct(){} //Pour empêcher l'instanciation de la classes

    /**
     * Réalise une instance de connection, si celle-ci n'est pas déjâ realisé
     * Retourne un type PDO
     * @return PDO
     */
    public static function getInstance() : ?PDO
    {
        if(DbConnect::$pdo === null){
            DbConnect::$pdo = new PDO("mysql:localhost;port=3306;dbname=db_users_simple;charset=utf8", "root", "");
        }

        return DbConnect::$pdo;
    }
}