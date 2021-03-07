<?php

    require_once "objects/Operator.php";
    require_once "libs/Session.php";

    $ses = Session::startSession();

    if (!$ses->isLogged())
        $ses->redirect("index.php");

    if($ses->isExpired()){
      $ses->redirect("logOut.php");
    }

    $operators = Operator::allOperators();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operators</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <style>
    body{
      background-image: url(https://pbs.twimg.com/media/EVPZS1SU0AEbCy3.jpg:large);
      background-size: fill;
    }

    .container{
      padding: 5px;
      display: flex;
      flex-direction: row;
      flex-wrap: wrap;
    }

    .card{
      background-color:rgba(0, 0, 0, 0.4);    
      margin: 8.6px;
    }

    nav{
      width: 100%;
    }

    a{
      color: #E2A45F;
    }

  </style>
</head>
<body>

  <?php
    include_once "nav.php";
  ?>
  
  <div class="container">
    <?php 
        for($i = 0; $i < count($operators); $i++){
          $OpId = $operators[$i]["OpId"];
    ?>
      <div class="card" style="width: 9rem;">
      <a href="operatorData.php?OpId=<?= $OpId ?>" class="card-link"> <img src="<?= $operators[$i]["OpIcon"] ?>" class="card-img-top"> </a>

        <div class="card-body text-center">
          <a href="operatorData.php?OpId=<?= $OpId ?>" class="card-link"><?= $operators[$i]["OpName"] ?></a>
        </div>
      </div>
    <?php  
      }
    ?>
  </div>
</body>
</html>