<?php
namespace Models;

class DbConnect
{
    private static $pdo = null;

    public static function getDb(){
        if(DbConnect::$pdo === null){
            DbConnect::$pdo = new PDO("mysql:localhost;port=3306;dbname=db_users_simple;charset=utf8", "root", "");
        }
        return DbConnect::$pdo;
    }
}