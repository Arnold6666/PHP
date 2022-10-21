<?php
    require_once("conn.php");
    extract($_POST);
    $interest = implode(",",$interest);

    $sql = "UPDATE students SET 
        name        = '$name',
        phone       = '$phone',
        mail        = '$mail',
        edu         = '$edu',
        gender      = '$gender',
        interest    = '$interest',
        content     = '$content'
        WHERE id    = {$id}";
    
    // echo $_POST["id"];
    // echo $_POST["name"];
    // echo $_POST["mail"];
    // echo $_POST["phone"];
    // echo $_POST["edu"];
    // echo $_POST["gender"];
    // var_dump($interest);
    // echo $_POST["content"];
    mysqli_query($conn,$sql);
    header("Location:index.php");