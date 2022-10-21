<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_name = "lccnet";

    //順序需正確
    $conn = mysqli_connect($db_host,$db_user,$db_pw,$db_name) or die("MySQL ERROR");

    // mysqli_query 在PHP里執行SQL語法
    mysqli_query($conn,"SET NAMES UTF8MB4");