<?php
    include "objects/Operator.php";
    require_once "libs/Session.php";

    $ses = Session::startSession();
    if (!$ses->isLogged()){
        $ses->redirect("index.php");
    }
    
    if($ses->isExpired()){
        $ses->redirect("logOut.php");
    }
        
    $operator = Operator::getRandomOperator();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous" />
    <title>Simulator</title>
    <style>
        body{
            background-image: url(https://pbs.twimg.com/media/EVPZS1SU0AEbCy3.jpg:large);
            background-size: cover;
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

        .btn{
            width: 100%;
        }
    </style>
</head>
<body>
    <?php
        include_once "nav.php";
    ?>

    <div class="container">
        <a class="btn btn-dark" href="simulator.php?hello=true">Try your luck!</a>
    </div>

    <?php
        if (isset($_GET['hello'])) {
            runMyFunction($operator);
        }
        function runMyFunction($operator) {
    ?>
        <div class="container">
            <div class="img">
                <img src="<?= $operator["OpImg"] ?>" alt="" width="100%">  
            </div>
            
            <div class="inf">
                <h1><?= $operator["OpName"] ?></h1>
                <?php 
                    for ($i=0; $i < $operator["Rarity"]; $i++) { 
                        echo "<img src=\"https://www.freepnglogos.com/uploads/star-png/star-vector-png-transparent-image-pngpix-21.png\" width=\"25\"/>";
                    }
                ?>
                <p></p>
                <h3>Description</h3>
                <p><?= $operator["Description"] ?></p>
                <h3>Skill 1</h3>
                <p><?= $operator["Skill1"] ?></p>
                <?php 
                    if(!$operator["Skill2"] == null){
                ?>
                    <h3>Skill 2</h3>
                    <p><?= $operator["Skill2"] ?></p>
                <?php 
                    } 
                ?>
                <?php 
                    if(!$operator["Skill3"] == null){
                ?>
                    <h3>Skill 3</h3>
                    <p><?= $operator["Skill3"] ?></p>
                <?php 
                    } 
                ?>
            </div>
        </div>
    <?php
        }
    ?>

</body>
</html>