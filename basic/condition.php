<?php
    // 判斷式

    $x = 10;
    if($x > 0){
        echo "success";
    };
    if($x > 0){
        echo "success2";
    }else{
        echo "Error";
    };

    if($x > 0){
        echo "正整數";
    }elseif($x < 0){
        echo "負整數";
    }else{
        echo "ERROR";
    };

    // 多條件的話 switch 效能 >if
    // if 可以判斷範圍; switch僅判斷特定值

    switch($x){
        case 0:
            echo 0;
            break;
        case 1:
            echo 1;
            break;
        case 2:
            echo 2;
            break;
        default:
            echo "error";
    }

    switch(true){
        case $x > 0:
            echo "正";
            break;
        case $x < 0:
            echo "負";
            break;
    }

    // 三源運算子

    echo $x > 0 ? "success":"error";