<?php
namespace Titanic\Models;
/**
 * Sales.php
 *
 * @author Jjeanniard
 * @version 0.0.1
 */

use PDO;

class Sales
{
    private PDO $pdo;

    public function __construct()
    {
        $this->pdo = DbConnect::getInstance();
    }

    /**
     * @return array|false
     */
    public function getSaleAll()
    {
        //Statement+data
        $rows =  $this->pdo->query('SELECT * FROM sales')->fetchAll(PDO::FETCH_CLASS, Sale::class);

        return !empty($rows)? $rows : false;
    }


}