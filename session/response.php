<?php
    session_start();//做session暫存一定要先啟動
    extract($_POST);

    $_SESSION["AUTH"] = $_POST;
    echo $_SESSION["AUTH"]["user"];
    echo $_SESSION["AUTH"]["mail"];

    header("location:index.php");