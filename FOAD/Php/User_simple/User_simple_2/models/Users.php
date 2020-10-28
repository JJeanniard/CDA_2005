<?php

/**
 * Organisation des methodes avec CRUD, pour la selection des utilisateurs dans la DB.
 * Class Users
 */
class Users
{
    private PDO $PDO;

    public function __construct(){
        $this->PDO = Dbconnect::getDb();
    }

    /**
     * @return false|PDOStatement
     */
    public function getFindAll() : PDOStatement
    {
        return $this->PDO->query("SELECT * FROM users");
    }

    /**
     *
     * @param int $id
     * @return bool
     */
    public function getFindById(int $id)
    {
        $row = $this->PDO->prepare("SELECT * FROM users WHERE user_id = :user_id");
        return $row->execute(array(":user_id" => $id));
    }

}