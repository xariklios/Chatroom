<?php
    if (!isset($_SESSION)) session_start();
    if(!isset($_SESSION['nickname'])){
        header(
            "Location: ./welcome"
        );
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/Chatroom/assets/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href=/Chatroom/assets/style.css>
        <title>Document</title>
    </head>

    <body>
        <!-- <div class="loader-wrapper"></div> -->
        <div class="jumbotron jumbotron-fluid jumb-entry">
            <div class="container-entry-header">
                <h1>Good to see you <?php echo $_SESSION["nickname"] ?></h1>      
                <p>ValChat ..Connecting people since 2019</p>
                <button type="button" class="btn btn-dark logout-btn" onclick="window.location.href='logout'">Logout</button>
            </div>
        </div> 
        <div class="entry-page-container">
        <input type="hidden" name="session_store" class="session_store" value="<?php echo $_SESSION['nickname']?>">

            <div class="container-chatbox">
                <div class="row">
                    <div class="col-8">
                        <div class="message-show" style="overflow: scroll;" id="message-show">

                        </div>
                    </div>
                    <div class="col-4">
                        <div class="users-online">
                            <?php echo $_SESSION["nickname"] . " is Online"?>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="message-send">
                            <textarea placeholder='Type your msg..' class="msg-container"></textarea>
                            <button type="button" class="btn btn-success" id="public_msg_send_btn">Send</button>
                            <input type="hidden" name="last_msg_id" id="last_msg_id" value="0">
                        </div>
                    </div>
                </div>
            </div>





            <div class="footer-copyright"style="background-color:black;">
                <p>&copy Charis Valtzis<br>all rights reserved</p>
            </div>

        </div>


 
        
    </body>
</html>


