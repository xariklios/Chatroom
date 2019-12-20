<?php
    if (!isset($_SESSION)) session_start();
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
        <div class="loader-wrapper"></div>
        <div class="jumbotron jumbotron-fluid jumb-entry">
            <div class="container-entry-header">
                <h1>Good to see you <?php echo $_SESSION["nickname"] ?></h1>      
                <p>ValChat ..Connecting people since 2019</p>
                <!-- <button type="button" class="btn btn-dark logout-btn" onclick="window.location.href='logout'">Logout</button>
            </div>
        </div> 
        <div class="container-entry">


            
                
                <div class="chatbox-wrapper"> 
                   <textarea readonly class="message-show-area">Amet venenatis urna cursus eget. Ipsum dolor sit amet consectetur. 
                       Massa massa ultricies mi quis hendrerit. Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque. 
                       Tempus imperdiet nulla malesuada pellentesque elit eget. Pulvinar sapien et ligula ullamcorper malesuada proin libero nunc consequat.
                        Velit ut tortor pretium viverra. Massa tincidunt dui ut ornare lectus sit amet est. Aliquam sem fringilla ut morbi. 
                        Euismod quis viverra nibh cras pulvinar mattis nunc. In metus vulputate eu scelerisque felis imperdiet.
                    </textarea>
               
                    <div class="message-write-area">
                        <input type="text" class="textbox-send-message">
                    </div>
                </div> -->
               
              


        
        </div>
        
        
    </body>
</html>


