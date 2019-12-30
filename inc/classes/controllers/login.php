<?php
namespace Chatroom\controllers;

    class Login extends coreController{
        
        public function login(){          
            
            $responsePayload = [
                'message' => 'LoggedIn',
                'loggedIn' => true
            ];

            try {
                if(empty($_POST['email']) || empty($_POST['pwd'])) {
                    throw new \Exception('Missing Email or Password');
                }

                $email = filter_var($_POST['email'],FILTER_SANITIZE_EMAIL);
                $pass =  filter_var($_POST['pwd'],FILTER_SANITIZE_STRING);
                $login_user = new \Chatroom\Authenticate();
                $check = $login_user->login($email,$pass);

                if(!$check) {
                    throw new \Exception('Login Failed');
                }
            }catch(\Exception $e) {
                $responsePayload['message'] = $e->getMessage();
                $responsePayload['loggedIn'] = false;
            }

            return $responsePayload;
        }
    }
?>