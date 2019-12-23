<?php
namespace Chatroom\controllers;

    class SendPublicMsg extends coreController{
        
        public function sendMsg(){
            if (isset($_POST['content'])){

                $public_msg_content =  filter_var($_POST['content']);        
                $message = new \Chatroom\models\messages();
                $message->publicMessages($public_msg_content);
            }
        }
        
    };

?>