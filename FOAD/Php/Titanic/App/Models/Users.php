<?php
namespace Titanic\Models;
/**
 * Class Users
 * @package Titanic\Models
 */

use PDO;

class Users
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DbConnect::getInstance();
    }

    public function getClientAll()
    {
        //Statement
        $sttm =  $this->pdo->query('SELECT * FROM clients');
        return !empty($sttm)? $sttm : false;
    }


}