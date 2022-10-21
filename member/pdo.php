<?php
    $db_host = "localhost";
    $db_user = "admin";
    $db_pw = "admin";
    $db_database = "lccnet";
    $db_charset = "utf8mb4";

    $dsn = "mysql:host={$db_host};dbname={$db_database};charset={$db_charset}";
    // $pdo = new PDO($dsn,$db_user,$db_pw); //建立PDO實體

    // 例外處理 類似錯誤處理
    //try後如果產生錯誤 透過PDOException將錯誤儲存變數中
    try {
        $pdo = new PDO($dsn,$db_user,$db_pw); //建立PDO實體
        // $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_SILENT); //不主動報錯
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING); //主動報錯
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION); //主動報例外
    }catch(PDOException $e){
        echo $e->getMessage();
    }; 

    // $sql= "SELECT * FROM test";
    // $res = $pdo -> exec($sql); //mysqli_query($conn,$sql);
    // if($res){   
    //     var_dump($result);
    // }else{
    //     echo $pdo->errorCode();
    //     echo "<br>";
    //     var_dump($pdo->errorInfo());
    // }

    // try{
    //     $sql= "SELECT * FROM test";
    //     $res = $pdo -> exec($sql);
    // }catch(PDOException $e){
    //     echo $e->getMessage();
    // }; 

    date_default_timezone_set("Asia/taipei");
    $now = date("Y-m-d H:i:s");