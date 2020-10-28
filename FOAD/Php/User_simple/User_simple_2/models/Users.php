<?php

/**
 * Organisation des methodes avec CRUD, pour la selection des utilisateurs dans la DB.
 * Class Users
 */
class Users
{
    private PDO $PDO;

    public function __construct()
    {
        $this->PDO = Dbconnect::getDb();
    }

    /**
     * Retourne tout les utilisateurs
     * @return bool|Statement
     */
    public function getFindAll()
    {
        $rows = $this->PDO->query("SELECT * FROM users");
        return $rows->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * Prend en parametre l'id de l'utilisateur
     * @param int $id
     * @return array|false
     */
    public function getFindById(int $id)
    {
        $user = false;

        $row = $this->PDO->prepare("SELECT * FROM users WHERE user_id = :user_id");

        if ($row->execute(array(":user_id" => $id))) {
            $user = $row->fetchAll(PDO::FETCH_ASSOC);
        }
        //On ferme la connection à la Db
        $row->closeCursor();

        return $user;
    }

    /**
     * @param $col
     * @param $val
     * @return false|Statement
     */
    public function getFindBy($col, $val)
    {
        $user = false;
        $row = $this->PDO->prepare("SELECT * FROM users WHERE user_id = :user_id");

        if ($row->execute()) {
            $user = $row->fetch(PDO::FETCH_ASSOC);
        }

        $row->closeCursor();

        return $user;
    }

    /**
     * @param string $username
     * @param string $useremail
     * @param string $userpwd
     * @param int $userrole
     * @return false|PDOStatement
     */
    public function insert(string $username, string $useremail, string $userpwd, int $userrole)
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
    }

    /**
     * @param int $id
     * @param string $username
     * @param string $useremail
     * @param string $userpwd
     * @param int $userrole
     * @return false|Statement
     */
    public function update(int $id, string $username, string $useremail, string $userpwd, int $userrole)
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
    }

    /**
     * @param int $id
     * @return false|PDOStatement
     */
    public function delete(int $id)
    {
        $results = false;
        $row = $this->PDO->prepare("DELETE FROM users WHERE user_id = :id");
        if ($row->execute(array(":id" => $id))) {
            $results = $row;
        }

        $row->closeCursor();

        return $results;
    }
}