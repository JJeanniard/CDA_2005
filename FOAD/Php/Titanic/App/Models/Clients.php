<?php
namespace Titanic\Models;
/**
 * Client.php
 *
 * @author Jjeanniard
 * @version 0.0.1
 */

use PDO;

class Clients
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
        //Statement+data
        $rows =  $this->pdo->query('SELECT * FROM clients')->fetchAll(PDO::FETCH_CLASS, 'Titanic\Models\Client');

        return !empty($rows)? $rows : false;
    }


}