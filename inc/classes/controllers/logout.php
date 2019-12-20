<?php
namespace Chatroom\controllers;

    class Logout extends coreController{
        
        public function Logout(){            
            session_start();
            unset($_SESSION);
            session_destroy();
            session_write_close();
            header('Location: welcome');
            die;
            
        }
    }
?>