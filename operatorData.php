<?php

    require_once "objects/Operator.php";
    require_once "objects/OpClass.php";
    require_once "libs/Session.php";

    $OpId = $_GET['OpId'];

    $ses = Session::startSession();

    if (!$ses->isLogged()){
        $ses->redirect("index.php");
    }

    if($ses->isExpired()){
        $ses->redirect("logOut.php");
    }

    $operator = Operator::getOperatorById($OpId);
    $className = OpClass::getClassById($OpId);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <style>
        body{
            background-image: url(https://pbs.twimg.com/media/EVPZS1SU0AEbCy3.jpg:large);
            background-size: fill;
            color: #E2A45F;
        }

        .container{
            padding: 5px;
            display: flex;
            justify-content: flex-end;
            background-color:rgba(0, 0, 0, 0.4); 
        }

        h1, h3{
            color: #C48137;
        }

        .img{
            width: 150%;
        }

        nav{
            width: 100%;
        }

    </style>
</head>
<body>

    <?php
        include_once "nav.php";
    ?>

    <div class="container">
        <div class="img">
            <img src="<?= $operator[0]["OpImg"] ?>" alt="" width="100%">  
        </div>
         
        <div class="inf">
            <h1><?= $operator[0]["OpName"] ?></h1>
            <?php 
                for ($i=0; $i < $operator[0]["Rarity"]; $i++) { 
                    echo "<img src=\"https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png\" width=\"25\"/>";
                }
            ?>
            <p></p>
            <h3>Class</h3>
            <p><?= $className[0]["ClassName"] ?></p>
            <h3>Description</h3>
            <p><?= $operator[0]["Description"] ?></p>
            <h3>Skill 1</h3>
            <p><?= $operator[0]["Skill1"] ?></p>
            <?php 
                if(!$operator[0]["Skill2"] == null){
            ?>
                <h3>Skill 2</h3>
                <p><?= $operator[0]["Skill2"] ?></p>
            <?php 
                } 
            ?>
            <?php 
                if(!$operator[0]["Skill3"] == null){
            ?>
                <h3>Skill 3</h3>
                <p><?= $operator[0]["Skill3"] ?></p>
            <?php 
                } 
            ?>
        </div>
    </div>
</body>
</html>