<?php

//welcome page
    \Chatroom\Route::set('welcome',function(){
        \Chatroom\controllers\coreController::CreateView('welcome');
    });

    \Chatroom\Route::set('register',function(){
        \Chatroom\controllers\register::createView('register');
    });

    \Chatroom\Route::set('entry',function(){
        \Chatroom\controllers\coreController::createView('entry');
    });

    \Chatroom\Route::set('logout',function(){
        \Chatroom\controllers\logout::logout();
    });


    \Chatroom\Route::set('ajax-register',function(){
        \Chatroom\controllers\register::register();
    });

    \Chatroom\Route::set('ajax-login',function(){
        $response = \Chatroom\controllers\Login::login();
        echo $response ? 1 : 0 ;
    });

    \Chatroom\Route::set('ajax-msg-send',function(){
        $n = \Chatroom\controllers\sendPublicMsg::sendMsg();  
    });


?>