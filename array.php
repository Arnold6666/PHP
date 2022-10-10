<?php
    $a = array();
    $a[0] = "天竺鼠車車";
    $a[1] = "天線寶寶";
    $a[2] = "鬼滅之刃";

    // echo $a; //notice錯誤 echo以一個值的為主
    // var_dump($a); //var_dump可以呼叫陣列

    $b = array("天竺鼠車車","天線寶寶","鬼滅之刃");
    // var_dump($b);

    $c = ["天竺鼠車車","天線寶寶","鬼滅之刃"];
    // var_dump($c);
    // echo $c[0];

    $netflex = ["驅魔麵館","亞森羅蘋","晉級的巨人","璀璨帝國","漠日激戰","奔向愛情","SweetHome","未來媽媽","鬼滅之刃"];

    // 陣列迭代
    // for($i=0;$i<9;$i++){
    //     echo $netflex[$i];
    // }

    // for($i=0;$i<count($netflex);$i++){
    //     echo $netflex[$i];
    // }

    foreach($netflex as $n){
        echo $n;
    }