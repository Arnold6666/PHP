<?php 
    require_once("conn.php");
    extract($_POST);
    // $id = $_POST["id"];

    //id 為整數用大括號包裹，不是單引號
    $sql = "DELETE FROM students WHERE id = {$id}";
    mysqli_query($conn,$sql);

    header("location:index.php");