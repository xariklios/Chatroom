<?php

    namespace Chatroom;

    class Route{


        public static function set($route, $function){
            if ($_GET['url']==$route){
                $function -> __invoke();
                
            }
        }

        public static function post($route, $function){
            if ($_POST['url']==$route){
                $function -> __invoke();
            }
        }
    }

?>