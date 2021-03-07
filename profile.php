<?php

    include_once "objects/User.php";
    include_once "libs/Session.php";

    $button = $_POST["action"]??"";

    $users = User::allUsers();

    $ses = Session::startSession();
    
    if (!$ses->isLogged()){
        $ses->redirect("index.php");
    }

    if($ses->isExpired()){
        $ses->redirect("logOut.php");
    }

    $currentUser = $ses->usuario;

    if ($button == 'update') {
        if(!empty($_POST["usName"]) && !empty($_POST["email"]) && !empty($_POST["password"])){
            $user = new User();
            $user::updateUser($_POST["idUsu"], $_POST["usName"], $_POST["email"], $_POST["password"]);
            $currentUser->setUsName($_POST["usName"]);
            $currentUser->setEmail($_POST["email"]);
            $currentUser->setPassword($_POST["password"]);
            $ses->redirect("logOut.php");
        }
    } else if ($button == 'delete') {
        $user = new User();
        $user::deleteUser($_POST["idUsu"]);
        $ses->redirect("logOut.php");
    } else {
        //
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <style>
        body{
            background-image: url(https://pbs.twimg.com/media/EVPZS1SU0AEbCy3.jpg:large);
            background-size: fill;
            color: #E2A45F;
        }

        .container{
            padding: 5px;
            background-color:rgba(0, 0, 0, 0.4); 
        }
        button{
            margin: 10px;
        }

    </style>
</head>
<body>

    <?php
        include_once "nav.php";
    ?>

    <div class="container">
        <form method="POST">
            <div class="form-group row">
                <label for="idUsu" class="col-sm-2 col-form-label">ID</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="idUsu" name="idUsu" value="<?= $currentUser->getUsId(); ?>" readonly>
                </div>
            </div>
            <div class="form-group row">
                <label for="usName" class="col-sm-2 col-form-label">User Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="usName" name="usName" value="<?= $currentUser->getUsName(); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="email" class="col-sm-2 col-form-label">Email</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="email" name="email" value="<?= $currentUser->getEmail(); ?>">
                </div>
            </div>
            <div class="form-group row">
                <label for="password" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="password" name="password" value="<?= $currentUser->getPassword(); ?>">
                </div>
            </div>
            <button class="btn btn-primary" name="action" value="update">Update</button>
            <button class="btn btn-danger" name="action" value="delete">Delete</button>
        </form>
        
    </div>
    
</body>
</html>