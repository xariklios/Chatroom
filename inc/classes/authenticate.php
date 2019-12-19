<?php

namespace Chatroom;



 class Authenticate extends \Chatroom\Dbcon{

    

    public function login($email,$pass){
        $email = $email;
        $password = MD5($pass);

        $login_query = "SELECT nickname FROM user_tbl WHERE email = :email AND  password = :password";
    //prepare the SQL query string
        $login_pdo = $this->getPdo();
        $stm = $login_pdo->prepare($login_query);
    //bind parameters to statement variables
        $stm->bindParam(':email',$email);
        $stm->bindParam(':password',$password);
    //execute statement
        $stm->execute();
    //fetching data
        $result = $this->fetchingData($stm);
        

        if (!$result){
           return false;
        }
        else{
            session_start();
            $_SESSION["nickname"] = $result;
            return true;
        }
    }

}




?>