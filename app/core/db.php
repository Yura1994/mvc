<?php

class Db
{


    protected $host = "localhost";
    protected $db = "test_1";
    protected $charset = "utf8";
    protected $user = "root";
    protected $pass = "";
    protected $pdo;
    protected $dsn = "mysql:host=localhost;name=test_1";

    function ConnectToDb()
    {
        $opt = array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
        );
        $this->pdo = new PDO($this->dsn, $this->user, $this->pass, $opt);

    }

//    function select($query){
//         $tmp = $this->pdo->prepare($query);
//         $tmp->execute();
//         return $tmp->fetchAll(PDO::FETCH_ASSOC);
//    }

    function Select($fields, $table)
    {
        return $result = $this->pdo->query("SELECT {$fields} FROM `test_1`.{$table}");


    }


}
