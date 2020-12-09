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

    /**
     * @return array|false
     */
    public function getClientAll()
    {
        //Statement
        $sttm =  $this->pdo->query('SELECT * FROM clients');
        $rows = $sttm->fetchAll();
        return !empty($rows)? $rows : false;
    }


}