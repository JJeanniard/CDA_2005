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
        $rows = $this->PDO->query("SELECT * FROM users");
        return $rows->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Prend en parametre l'id de l'utilisateur
     * @param int $id
     * @return array
     */
    public function getFindById(int $id) : array
    {
        $row = $this->PDO->prepare("SELECT * FROM users WHERE user_id = :user_id");
        $row->execute(array(":user_id" => $id));
        return $row->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $col
     * @param $val
     * @return array
     */
    public function getFindBy($col, $val) : array
    {
        $row = $this->PDO->prepare("SELECT * FROM users WHERE user_id = :user_id");

        return $row->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param int $id
     * @param string $username
     * @param string $useremail
     * @param string $userpwd
     * @param int $userrole
     * @return bool
     */
    public function update(int $id, string $username, string $useremail, string $userpwd, int $userrole) : bool
    {
        $row = $this->PDO->prepare("UPDATE users SET user_name = :username, user_email = :email, user_pwd = :pwd, user_role = :userrole WHERE user_id = :user_id");
        $row->execute(array(
            ":user_id" => $id,
            ":username" => $username,
            ":email" => $useremail,
            ":pwd" => $userpwd,
            ":userrole" => $userrole
        ));
        return $row;
    }

}