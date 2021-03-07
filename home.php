<?php

    require_once "libs/Session.php";

    $ses = Session::startSession();
    if (!$ses->isLogged())
        $ses->redirect("index.php");

    if($ses->isExpired()){
        $ses->redirect("logOut.php");
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
        }
    </style>
</head>
<body>

    <?php
        include_once "nav.php";
    ?>

    <div class="container">
        <a class="twitter-timeline" data-height="1200" data-theme="dark" href="https://twitter.com/ArknightsEN?ref_src=twsrc%5Etfw">Tweets by ArknightsEN</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
    </div>

</body>
</html>