<?php
/**
 * Organisation des methodes avec CRUD, pour la selection des utilisateurs dans la DB.
 * Class Users
 */
class Users extends RequestPDO
{
    public function __construct()
    {
        parent::__construct("users");
    }

    /**
     * @param int $id
     * @return false|mixed
     */
    public function getFindById(int $id)
    {
        return parent::getFindBy("user_id", $id);
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
    public function deleteById(int $id)
    {
        return parent::delete("user_id", $id);
    }
}