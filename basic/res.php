<?php 
    // 全域變數
    // echo $_POST;
    // form表單送出為陣列，需用var_dump帶出，或者用echo 指定相關的鍵key
    // var_dump($_POST);
    // echo $_POST["user"];
    // echo "<br>";
    // echo $_POST["mail"];
    // echo "<br>";
    // echo $_POST["phone"];
    // 表單中使用get僅有搜尋引擎與連結'
    extract($_POST);
    // echo $content;
    
    echo $user;
    echo "<br>";
    echo $mail;
    echo "<br>";
    echo $phone;
    echo "<br>";
    echo $gender;
    echo "<br>";
    echo $edu;
    echo "<br>";
    // 透過implode將陣列轉換成字串
    echo implode(",",$interest);
    echo "<br>";
    echo $content;
    echo "<br>";

