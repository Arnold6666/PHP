<?php 
    function test(){
        echo "TEST";
    }

    function calc($x){
        echo $x * 1.5;
    }

    function square($x,$y){
        echo $x * $y;
    }
    // square(10,20);

    // javascript可以透過return回傳結果，PHP不行
    // 為帶出值，建議使用return
    function hello($name){
        return "HELLO".$name;
    }

    $a = hello("John");
    echo $a;

    $b = calc(100);
    echo $b;