<?php
namespace Titanic\Models;
/**
 * Client.php
 *
 * @author Jjeanniard
 * @version 0.0.1
 */

use \PDO;
use \PDOException;

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
        $rows =  $this->pdo->query('SELECT * FROM clients')->fetchAll(PDO::FETCH_CLASS, Client::class);

        return !empty($rows)? $rows : false;
    }

    /**
     * @param string $email
     * @return mixed
     */
    public function getByClientEmail(string $email) : mixed
    {
        $user = false;

        $values = ['email' => $email];

        $stmt = $this->pdo->prepare("SELECT * FROM clients WHERE client_email = :email");

        try{
            if($stmt->execute($values)){
                $user = $stmt->fetch();
            }
        }catch (PDOException $e){
            echo "Error execute pdo clients: $e";
        }

        $stmt->closeCursor();

        return $user;
    }
}