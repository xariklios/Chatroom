<?php

namespace Chatroom;
use PDO;


class Dbcon {

    private $server;
    private $username;
    private $password;
    private $dbname;
    private $pdo;
    
    

//Constructor to give the correct database parameters

    function __construct(){
        $this->server = "localhost";
        $this->username = "root";
        $this->password = "";
        $this->dbname = "chatroom";

        $this->pdo = $this->connect();

    }
//Function to make the connection to the database

    private function connect(){
        try{
            $dsn = "mysql:host=" .$this->server . ";dbname=" . $this->dbname;
            $pdo = new \PDO($dsn,$this->username,$this->password);
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    //catch the error in case connection fail
        }catch(PDOException $e){
                $error_message = $e->getMessage();
                echo $error_message;
        }

        return $pdo;

    }

    public function getPdo(){
        return $this->pdo;
    }

    public function fetchingData($data){
        $result = $data->setFetchMode(\PDO::FETCH_ASSOC);
        $result = $data->fetchColumn();
        return $result;
    }



}


?>