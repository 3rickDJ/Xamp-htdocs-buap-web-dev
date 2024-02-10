<?php
class sql
{
    public $conn;

    public function __construct()
    {
        $user = "root";
        $pass = "";
        $serv = "localhost:3306";
        $db = "encuesta";

        $this->conn = new mysqli($serv, $user, $pass, $db);
    }

    public function select($sql)
    {
        //echo $sql . "<br>";
        $result = $this->conn->query($sql);
        return $result;
    }
}