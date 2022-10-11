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

    // foreach($netflex as $n){
    //     echo $n;
    // }


    // 關聯陣列 無法使用索引值取得內容 因此無法使用for迴圈迭代
    // 箭頭左側為鑑key 箭頭右側為value
    $users = [
        "name" => "John",
        "mail" => "asdf@gmail.com",
        "phone" => "0987654321"
    ];

    // echo $users["phone"];
    // foreach($users as $key => $value){
    //     echo $key.":".$value;
    //     echo "<br>";
    // }

    // is_array() 判斷是否為陣列
    // var_dump(is_array($c));

    // in_array 判斷是否存在於陣列
    // var_dump(in_array("天竺鼠車車",$c));

    // echo count($netflex);

    // compact() 可以將變數變成關聯陣列
    $books = "精通php mysql";
    $cartoon = "天竺鼠車車";
    $test = compact("books","cartoon");
    // var_dump($test);

    // extract() 利用extract可以解構關聯陣列 直接帶出內值
    // var_dump(extract($users));
    // echo $name;
    // echo $mail;
    // echo $phone;

    // 如果不使用extract
    // $name = $users["name"];
    // $mail = $users["mail"];
    // $phone = $users["phone"];
    // echo $name;

    // implode() 陣列轉字串
    $netflex_string = implode(",",$netflex);
    // echo $netflex_string;

    // explode() 字串轉陣列,轉換後因陣列無法用echo呼叫，透過var_dump取得
    $str = "HELLO WORLD";
    $str_array = explode("O",$str);
    var_dump($str_array);

