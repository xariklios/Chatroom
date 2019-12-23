<?php
namespace Chatroom\Models;

session_start();


use Chatroom;

class Messages extends \Chatroom\dbCon{

    public function publicMessages($content){
        $session_nickname = $_SESSION['nickname'];
        $get_users_id_query = "SELECT id 
                            FROM user_tbl 
                            WHERE nickname = '$session_nickname'";
        $get_users_id_pdo = $this->getpdo();//pdo
        $sth_get_users = $get_users_id_pdo->prepare($get_users_id_query);
        $sth_get_users->execute();
        $result = $sth_get_users->setFetchMode(\PDO::FETCH_ASSOC);
        $result = $sth_get_users->fetchColumn();
   
        $public_msg_query="INSERT INTO public_msg_tbl (content,usr_id) 
                        VALUES (:content,:usr_id)";
//prepare the SQL query string
        $public_msg_pdo = $this->getPdo();
        $stm = $public_msg_pdo->prepare($public_msg_query);
//bind parameters to statement variables
        $stm->bindParam(':content',$content);
        $stm->bindParam(':usr_id',$result);
// //execute statement 
        $stm->execute();
        
    }

    // public function getPublicMessages(){
    //     $getMsg_query = "SELECT content 
    //                     FROM public_msg_tbl 
    //                     WHERE $result = usr_id";
    //     $get_msg_pdo = $this->getpdo();//pdo
    //     $sth_get_msg = $get_msg_pdo>prepare($getMsg_query);
    //     $sth_get_msg->execute();
    // }
    
}

?>