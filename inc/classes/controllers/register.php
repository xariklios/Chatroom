<?php
    namespace Chatroom\Controllers;

    class register extends coreController {

        public function register(){
            if (isset($_POST['nickname'], $_POST['email'], $_POST['pwd'], $_POST['re-pwd'], $_POST['optradio'])) {
                $nickname =  filter_var($_POST['nickname'],FILTER_SANITIZE_STRING);
                $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                $pwd =  filter_var($_POST['pwd'],FILTER_SANITIZE_STRING);
                $re_pwd = filter_var($_POST['re-pwd'],FILTER_SANITIZE_STRING);

                $sex = $_POST['optradio'];
                
                $register = new \Chatroom\models\user();
                $register->register($nickname,$email,$pwd,$re_pwd,$sex);
            }
        }
    }
?>