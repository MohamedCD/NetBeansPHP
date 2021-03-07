<?php

    require_once "objects/User.php";

    if(!empty($_POST["user"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
        if($_POST["password"] == $_POST["cPassword"]){
            $user = new User;
            $user::addUser($_POST["user"], $_POST["email"], $_POST["password"]);

            require_once "libs/Session.php";

            $session = Session::startSession();

            if ($session->login($_POST["email"], $_POST["password"])){
                $session->redirect("home.php");
            }      
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <style type="text/css">
        body, html{
            height: 100%;
        }

        .bg{
            height: 100%;
            background-image: url("images/register.jpg");
            background-position: center;
            background-repeat: no-repeat;
            background-size: fill;
        }

        .container{
            display: flex;
            flex-direction: column;
            background-color:rgba(0, 0, 0, 0.8);
            color: #E2A45F;
        }

    </style>
</head>
<body>

    <div class="bg">
        <div class="container">  
            <h3 class="pt-5">Arknights register</h3>
            <form method="post">
                <div class="form-group">
                    <label for="user">User name</label>
                    <input type="text" autocomplete="off" class="form-control w-25" id="user" name="user" required />			    
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" autocomplete="off" class="form-control w-25" id="email" name="email" placeholder="Introduce your email" required />			    
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control w-25" id="password" name="password"  required />			    
                </div>
                <div class="form-group">
                    <label for="cPassword">Confirm password</label>
                    <input type="password" class="form-control w-25" id="cPassword" name="cPassword"  required />			    
                </div>
                <button class="btn btn-dark w-25">Register</button>
            </form>
            <a href="index.php">Get me out!</a>
        </div>
    </div>
</body>
</html>

