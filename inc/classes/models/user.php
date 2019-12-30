<?php
namespace Chatroom\Models;

if (!isset($_SESSION)) session_start();


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

//get online users from db

    public function get_online_users(){
        $get_online_users_query = "SELECT nickname 
                                FROM user_tbl 
                                WHERE user_online = 1";
        $get_online_users_pdo = $this->getPdo();
        $get_online_users_stm = $get_online_users_pdo->prepare($get_online_users_query);
        $get_online_users_stm->execute();
        $result = $get_online_users_stm->setFetchMode(\PDO::FETCH_ASSOC);
        $result = $get_online_users_stm->fetchAll();
        return $result;
    }

}

?>