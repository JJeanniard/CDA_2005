<?php
namespace Models;

class DbConnect
{
    private static ?PDO $pdo = null;

    private function __construct(){}

    public static function getInstance() : PDO
    {
        if(DbConnect::$pdo === null){
            DbConnect::$pdo = new PDO("mysql:localhost;port=3306;dbname=db_users_simple;charset=utf8", "root", "");
        }

        return DbConnect::$pdo;
    }
}