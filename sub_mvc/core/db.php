<?php

class db
{
    public $conn;
    protected $servername = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $dbname = "mvc_final";

    function __construct()
    {
        $this->conn = mysqli_connect($this->servername,$this->username,$this->password);
        mysqli_select_db($this->conn,$this->dbname);
        mysqli_set_charset($this->conn,'utf8');
    }
}
?>