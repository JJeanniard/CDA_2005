<?php
class RequestPDO
{
    private PDO $pdo;

    private string $table;

    /**
     * RequestPDO constructor.
     */
    public function __construct($table)
    {
        $this->pdo = Dbconnect::getDb();
        $this->table = $table;
    }

    /**
     * @return array
     */
    public function getFindAll()
    {
        $rows = $this->pdo->query("SELECT * FROM $this->table");
        return $rows->fetchAll(PDO::FETCH_ASSOC);
    }

    /**
     * @param $col
     * @param $val
     * @return false|mixed
     */
    public function getFindBy(string $col, $val)
    {
        $result = false;
        $row = $this->pdo->prepare("SELECT * FROM $this->table WHERE $col = :val");

        if ($row->execute(array(":val" => $val))) {
            $result = $row->fetch(PDO::FETCH_ASSOC);
        }

        $row->closeCursor();

        return $result;
    }

    public function insert(string $cols, string $vals)
    {
        $result = false;
        $row = $this->pdo->prepare("INSERT INTO $this->table() VALUES ()");

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
        $row = $this->pdo->prepare("DELETE FROM $this->table WHERE $col = :val");
        if ($row->execute(array(":val" => $val))) {
            $results = $row;
        }

        $row->closeCursor();

        return $results;
    }
}