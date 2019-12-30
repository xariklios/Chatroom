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
        return [
                "status" => true
        ];
    }

    public function getPublicMessages($id){
        $getMsg_query = "SELECT * 
                        FROM public_msg_tbl
                        WHERE $id < id";
        $get_msg_pdo = $this->getpdo();//pdo
        $sth_get_msg = $get_msg_pdo->prepare($getMsg_query);
        $sth_get_msg->execute();
        $result = $sth_get_msg->setFetchMode(\PDO::FETCH_ASSOC);
        $results = $sth_get_msg->fetchall();
        //----------------------------------
        $getSender_query ="SELECT s.id,s.nickname
                        FROM user_tbl s
                        JOIN public_msg_tbl n ON s.id = n.usr_id";
        $getSender_pdo = $this->getpdo();//pdo
        $sth_getSender = $getSender_pdo->prepare($getSender_query);
        $sth_getSender->execute();
        $results_sender = $sth_getSender->setFetchMode(\PDO::FETCH_ASSOC);
        $results_sender = $sth_getSender->fetchAll();
        //---------------------------------
        if ($results) {
                return [
                        "status" => true,
                        "lastid" => end($results)['id'],
                        "data" => $results,
                        "send_data"=>$results_sender
                ];
        } else {
                return [
                        "status" => false
                ];
        }
        
    }
    
}

?>