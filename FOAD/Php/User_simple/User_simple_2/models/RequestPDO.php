<?php

class RequestPDO
{
    private PDO $PDO;

    private string $table;

    /**
     * RequestPDO constructor.
     */
    public function __construct(string $table)
    {
        $this->PDO = Dbconnect::getDb();
        $this->table = $table;
    }

    /**
     * @param $table
     * @return array
     */
    public function getFindAll()
    {
        $rows = $this->PDO->query("SELECT * FROM $this->table");
        return $rows->fetchAll(RequestPDO::FETCH_ASSOC);
    }

    public function getFindById(int $id)
    {
        $user = false;

        $row = $this->PDO->prepare("SELECT * FROM $this->table WHERE user_id = :user_id");

        if ($row->execute(array(":user_id" => $id))) {
            $user = $row->fetchAll(RequestPDO::FETCH_ASSOC);
        }
        //On ferme la connection à la Db
        $row->closeCursor();

        return $user;
    }

    /**
     * @param $col
     * @param $val
     * @return false|mixed
     */
    public function getFindBy(string $col, $val)
    {
        $result = false;
        $row = $this->PDO->prepare("SELECT * FROM $this->table WHERE $col = :val");

        if ($row->execute(array(":val" => $val))) {
            $result = $row->fetch(RequestPDO::FETCH_ASSOC);
        }

        $row->closeCursor();

        return $result;
    }

    public function insert(string $cols, string $vals)
    {
        $result = false;
        $row = $this->PDO->prepare("INSERT INTO $this->table() VALUES ()");

        if($row->execute(array(

        ))){
            $result = $row;
        }

        $row->closeCursor();

        return $result;
    }

    public function delete(string $col, $val)
    {
        $results = false;
        $row = $this->PDO->prepare("DELETE FROM $this->table WHERE $col = :val");
        if ($row->execute(array(":val" => $val))) {
            $results = $row;
        }

        $row->closeCursor();

        return $results;
    }
}