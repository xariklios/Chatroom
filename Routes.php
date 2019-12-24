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
        $response = \Chatroom\controllers\sendPublicMsg::sendMsg();  
        header('Content-Type: application/json');
        echo json_encode($response);
    });

    \Chatroom\Route::set('ajax-msg-receive',function(){
        $response = \Chatroom\controllers\sendPublicMsg::receiveNewMsg();  
        header('Content-Type: application/json');
        echo json_encode($response);
    });


?>