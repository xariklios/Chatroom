<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="/SecondProj/assets/script.js"></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href=/SecondProj/assets/style.css>
    <title>Document</title>
</head>
<body>
    <div class="loader-wrapper"></div>   
    <div class="bg">    
        <div class="container-register">
            <h2>Register</h2>
            <form action="ajax-register" method="post" class="register">
                <div class="form-group">
                    <label for="nickname">Nickname:</label>
                        <input type="text" class="form-control" id="nickname" required placeholder="Enter Nickname" name="nickname" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" required placeholder="Enter email" name="email" autocomplete="off">
                    </div>
                    <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd" required placeholder="Enter password" name="pwd">
                    </div>
                    <div class="form-group">
                        <label for="re-pwd">Repeat Password:</label>
                        <input type="password" class="form-control" id="re-pwd" required placeholder="Repeat password" name="re-pwd">
                    </div>
                    <h3>Sex</h3>
                    <div class="radio">
                        <label><input type="radio" class="gender" name="optradio" value ="male" checked> Male</label>
                    </div>
                    <div class="radio">
                        <label><input type="radio" class="gender" name="optradio" value="female"> Female</label>
                    </div>
                    <button type="submit" id="register_btn" class="btn btn-dark">Register</button>
                    <button type="button" class="btn btn-dark" onclick="window.location.href='welcome'">Back to Login</button>
                </div>    
            </form>
        </div>
        <div class="footer-copyright">
            <p>&copy Charis Valtzis<br>all rights reserved</p>
        </div>
    </div>

</body>
</html>