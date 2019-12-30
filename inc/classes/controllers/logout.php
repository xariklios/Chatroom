<?php
namespace Chatroom\controllers;

session_start();

    class Logout extends coreController{
        
        public function Logout(){  
            $session =  $_SESSION["nickname"];
            $change_state_query = "UPDATE user_tbl
                                SET user_online = 0
                                WHERE nickname = '$session'";
            $getPdo = new \Chatroom\dbCon();
            $change_state_pdo = $getPdo->getPdo();
            $stm_change_state = $change_state_pdo->prepare($change_state_query);
            $stm_change_state->execute();             
            session_start();
            unset($_SESSION);
            session_destroy();
            session_write_close();
            header('Location: welcome');   
            die;
        }
    }
?>