<?php
    namespace Chatroom\Controllers;

    class coreController {
        public static function CreateView($view_name, $templateVars = []){
            require_once ('./views/'.$view_name.'.php');
        }
    }
?>