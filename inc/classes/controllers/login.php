<?php
namespace Chatroom\controllers;

    class Login extends coreController{
        
        public function login(){            
            $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
            $pass =  filter_var($_POST['pwd'],FILTER_SANITIZE_STRING);
            $login_user = new \Chatroom\Authenticate();
            $check=$login_user->login($email,$pass);
            return $check;
            
        }
    }
?>