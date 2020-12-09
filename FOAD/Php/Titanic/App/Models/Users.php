<?php

namespace Titanic\Models;

class Users
{
    private ?PDO $pdo = null;

    public function __construct()
    {
        $this->pdo = DbConnect::getInstance();
    }

    public function getClientAll()
    {
        //Statement
        $sttm =  $this->pdo->query('SELECT * FROM user');

       return $sttm->fetchAll('PDO::FETCH_CLASS', "User");
    }


}