<?php

//welcome page
    \Chatroom\Route::set('welcome',function(){
        \Chatroom\controllers\coreController::CreateView('welcome');
    });

    \Chatroom\Route::set('register',function(){
        \Chatroom\controllers\register::createView('register');
    });

    \Chatroom\Route::set('entry',function(){
        $get_online_users = new \Chatroom\models\user();
        $online_users_response = $get_online_users->get_online_users();
        \Chatroom\controllers\coreController::createView('entry',[
            'online_users' => $online_users_response
        ]);
    });

    \Chatroom\Route::set('logout',function(){
        \Chatroom\controllers\logout::logout();
    });


    \Chatroom\Route::set('ajax-register',function(){
        \Chatroom\controllers\register::register();
    });

    \Chatroom\Route::set('ajax-login',function(){
        $response = \Chatroom\controllers\Login::login();
        echo json_encode($response);
        die();
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