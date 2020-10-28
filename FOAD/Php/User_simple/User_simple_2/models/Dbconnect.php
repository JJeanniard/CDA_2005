<?php


class Dbconnect
{
    private static $PDO = null;

    /**
     * Initialise une instance d'une connection à une base de donnée.
     * Si $PDO n'est pas init (null), on lui insert une instance PDO
     * @return null
     */
    public static function getDb(){

        if(Dbconnect::$PDO === null){
            Dbconnect::$PDO = new PDO("mysql:localhost;port=3306;dbname=db_users_simple;charset=utf8", "root", "");
        }

        return Dbconnect::$PDO;
    }
}