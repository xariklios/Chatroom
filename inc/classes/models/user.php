<?php
namespace Chatroom\Models;

session_start();


use Chatroom;

class User extends \Chatroom\dbCon{
            
    private $nickname;
    private $email;
    private $password;
    private $sex;
    

//Register User Function
    public function register($nickname,$email,$pwd,$re_pwd,$sex){

        if($pwd == $re_pwd){
            $mdpass = md5($pwd);
            $register_query="INSERT INTO user_tbl (nickname,email,password,sex) 
            VALUES (:nickname,:email,:password,:sex)";
//prepare the SQL query string
             $login_pdo = $this->getPdo();
             $stm = $login_pdo->prepare($register_query);
//bind parameters to statement variables
             $stm->bindParam(':nickname',$nickname);
             $stm->bindParam(':email',$email);
             $stm->bindParam(':password',$mdpass);
             $stm->bindParam(':sex',$sex);
//execute statement 
            $stm->execute();
            return true;
        }
 
    }

}

?>