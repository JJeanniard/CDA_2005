<?php
require "RequestPDO.php";
/**
 * Organisation des methodes avec CRUD, pour la selection des utilisateurs dans la DB.
 * Class Users
 */
class Users extends RequestPDO
{
    private RequestPDO $request;

    public function __construct()
    {
        $this->request = new RequestPDO("users");
    }

    /**
     * Retourne tout les utilisateurs
     * @return array
     */
    public function getFindAll() : array
    {
        return $this->request->getFindAll();
    }

    /**
     * Prend en parametre l'id d'un l'utilisateur
     * @param int $id
     * @return array|false
     */
    public function getFindById(int $id)
    {
        return $this->request->getFindById($id);
    }

    /**
     * @param $col
     * @param $val
     * @return false|mixed
     */
    public function getFindBy(string $col, $val)
    {
        return $this->request->getFindBy($col, $val);
    }

    /*public function insert(string $username, string $useremail, string $userpwd, int $userrole)
    {
        $user = false;
        $row = $this->PDO->prepare("INSERT INTO users(user_name, user_email, user_pwd, user_role) VALUES (:username, :email, :pwd, :userrole)");

        if($row->execute(array(
            ":username" => $username,
            ":email" => $useremail,
            ":pwd" => $userpwd,
            ":userrole" => $userrole
        ))){
           $user = $row;
        }

        $row->closeCursor();

        return $user;
    }*/

    /**
     * @param int $id
     * @param string $username
     * @param string $useremail
     * @param string $userpwd
     * @param int $userrole
     * @return false|Statement
     */
    /*public function update(int $id, string $username, string $useremail, string $userpwd, int $userrole)
    {
        $results = false;
        $row = $this->PDO->prepare("UPDATE users SET user_name = :username, user_email = :email, user_pwd = :pwd, user_role = :userrole WHERE user_id = :user_id");
        if ($row->execute(array(
            ":user_id" => $id,
            ":username" => $username,
            ":email" => $useremail,
            ":pwd" => $userpwd,
            ":userrole" => $userrole
        ))) {
            $results = $row;
        }

        $row->closeCursor();

        return $results;
    }*/

    /**
     * @param int $id
     * @return bool|PDOStatement
     */
    public function delete(int $id)
    {
        return $this->request->delete("user_id", $id);
    }
}