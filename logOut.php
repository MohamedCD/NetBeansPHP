<?php

    require_once "libs/Session.php";

    $ses = Session::startSession();
    if (!$ses->isLogged())
        $ses->redirect("index.php");

    $ses->close();
    $ses->redirect("index.php");
?>