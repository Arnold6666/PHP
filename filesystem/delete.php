<?php
    require_once("pdo.php");
    extract($_POST);
    unlink("images/".$g); //先刪資料表會找不到圖片資料 無法刪除
    $sql = "DELETE FROM galleries WHERE id = ?";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);

    

    header("location:index2.php");