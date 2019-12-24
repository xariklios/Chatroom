<?php
namespace Chatroom\controllers;

    class SendPublicMsg extends coreController{
        
        public function sendMsg(){
            if (isset($_POST['content'])){

                $public_msg_content =  filter_var($_POST['content']);        
                $message = new \Chatroom\models\messages();
                return $message->publicMessages($public_msg_content);
            }
        }

        public function receiveNewMsg(){
            $last_ins_id = $_GET['id'];
            $receive_msg = new \Chatroom\models\messages();
            return $receive_msg-> getPublicMessages($last_ins_id);
        }
        
    };

?>