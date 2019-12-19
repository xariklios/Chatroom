<!DOCTYPE html>

    <head>
        <title>ValChat</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href=/Chatroom/assets/style.css>
        <meta charset="utf-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="/Chatroom/assets/script.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
        
        
    </head>

    <body>

    
        <div class="loader-wrapper"></div>   

        <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1>Welcome to Valchat</h1>      
            <h5>The most loving and warm chatting app worldwide &hearts; &hearts; &hearts;</h5>
        </div>
        </div>

        <div class="bg">

            <div class="container-login">
                <h2>Login</h2>
                <form action="ajax-login" class="login" method="post">
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email"  placeholder="Enter email" name="email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd"  placeholder="Enter password" name="pwd" autocomplete="off">
                    </div>
                    <div class="checkbox">
                        <label><input type="checkbox" name="remember"> Remember me</label>
                    </div>
                    <button type="submit" class="btn btn-dark">Login</button>
                    <button type="button" class="btn btn-dark" onclick="window.location.href='register'">Register</button>
                    <div class="alert alert-danger" role="alert">
                        Wrong Email Or Password!
                    </div>
                </form>
            </div>


            <div class="footer-copyright">
                <p>&copy Charis Valtzis<br>all rights reserved</p>
            </div>
        </div>    
  
    




    </body>

</html>