<?php
    require_once("conn.php");
    extract($_POST);
    $sql = "DELETE FROM products where id = {$id}";
    mysqli_query($conn,$sql);

    header("location:index.php");