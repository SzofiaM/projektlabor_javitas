<?php


class db
{
    private $pdo = null;
    private $stmt = null;

    function __construct(){
        try {
            $this->pdo = new PDO(
                "mysql:
                host=localhost;
                dbname=projektlabor;
                charset=utf8",
                "root",
                ""
            );
        } catch (Exception $ex) { echo "Hibás adatbázis adatok!";die; }
    }

    function __destruct(){
        // CLOSE CONNECTION
        $this->stmt = null;
        $this->pdo = null;
    }

    function select($sql, $cond=null){
        $result = false;
        try {
            $this->stmt = $this->pdo->prepare($sql);
            $this->stmt->execute($cond);
            $result = $this->stmt->fetchAll();
        } catch (Exception $ex) { echo "Hibás lekérdezés!";die; }
        $this->stmt = null;
        return $result;
    }
    function log($msg)
    {
        $this->select("INSERT INTO `log`(`Date`, `Log`) VALUES ('" . date('Y-m-d h:i:sa') . "','". $msg."');");
    }
}





