<?php
    $user = $_POST["user"]??"";
	$password = $_POST["password"]??"";

	require_once "libs/Session.php";

	$session = Session::startSession();

    if (!empty($_POST)){
        if ($session->login($user, $password)){
            $session->redirect("home.php");
        }      
    }
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <style type="text/css">
        body, html{
            height: 100%;
        }

        .bg{
            height: 100%;
            background-image: url("images/index.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container{
            padding-top: 15%;
            padding-left: 30%;
            max-width: 1450px;
        }

        .h-100vh{
            height: 88vh;
            padding-right: 10vh;
        }
    </style>
</head>
<body>
    <div class="bg">
        <div class="d-flex align-items-center justify-content-center h-100vh">
            <form method="post">
                <div class="form-group">
                    <label for="user"><b>User name</b></label>
                    <input type="email" autocomplete="off" class="form-control" id="user" name="user" placeholder="example@arkyoru.com" required />			    
                </div>
                <div class="form-group">
                    <label for="password"><b>Password</b></label>
                    <input type="password" autocomplete="off" class="form-control " id="password" name="password"  required />			    
                </div>
                <button class="btn btn-dark ">Log in</button>
                <br/>
                <a href="signUp.php">Sign up</a> 
            </form>    
        </div>
    </div>
</body>
</html>