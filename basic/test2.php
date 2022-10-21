<?php 
function CallDivideTimes($n){
    if($n==1){
        $times = 0;
        return $times;
    }elseif($n> 1 && $n%2 ==1){
        $times = -1;
        return $times;
    }else{
        $times = $n/2;
        return $times;
    }
}

function DecimalToAZ52($n){
    $base52 = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMONPQRSTUVWXYZ";
    $base52 = str_split($base52);
    // var_dump($base52);
    // echo "<br>";
    // echo $base52[51];
    // echo "<br>";
    $s = '';
    do{
        $s = $base52[bcmod($n,52)].$s;
        // var_dump($s);
        // echo "<br>";
        $n = bcdiv($n,52);
        // echo $n;
        // echo "<br>";
    }while($n >0);
    return $s;
}

function AZ52ToDecimal($str){
    $base52="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMONPQRSTUVWXYZ";
    $str = strval($str);
    echo $str;
    echo "<br>";
    $len = strlen($str);
    echo $len;
    echo "<br>";
    $y = 0;
    for($i = 0; $i< $len; $i++){
        $pos = strpos($base52,$str[$i]);
        var_dump($pos);
        echo "<br>";
        $y = bcadd(bcmul(bcpow(52, $len - $i - 1),$pos), $y);
        echo $y;
        echo "<br>";
    }
    return $y;
}


function to1000($num){
    $K = 1000;
    $M = 1000000;
    $B = 1000000000;
    $T = 1000000000000;
    if($num >= 1000000000000 && $num < 1000000000000000){
        if(bcdiv($num,$T,2) > 100){
            echo ">100";
            echo "<br>";
            $numT = bcdiv($num,$T).'T';
            return $numT;
        }elseif(bcdiv($num,$T,2) >= 10 && mb_substr(bcdiv($num,$T,2),3,1) >0){
            echo ">=10";
            echo "<br>";
            $numT = mb_substr(bcdiv($num,$T,2),0,4).'T';
            return $numT;
        }elseif(mb_substr(bcdiv($num,$T,2),2,2) ==0){
            echo "==0";
            echo "<br>";
            $numT = bcdiv($num,$T).'T';
            return $numT;
        }elseif(strpos(bcdiv($num,$T,2),".")==1 && mb_substr(bcdiv($num,$T,2),3,1) == 0){
            $numT = mb_substr(bcdiv($num,$T,2),0,4).'T';
            echo "31==";
            echo "<br>";
            return $numT;
        }elseif(strpos(bcdiv($num,$T,2),".")==1 && mb_substr(bcdiv($num,$T,2),3,1) > 1){
            $numT = mb_substr(bcdiv($num,$T,2),0,4).'T';
            echo ">1";
            echo "<br>";
            return $numT;
        }else{
            echo "else";
            echo "<br>";
            $numT = bcdiv($num,$T).'T';
            // echo strpos(bcdiv($num,$T,2),".");
            return $numT;
        };
    }elseif($num >= 1000000000 && $num < 1000000000000){
        if(bcdiv($num,$B,2) > 100){
            echo ">100";
            echo "<br>";
            $numT = bcdiv($num,$B).'B';
            return $numT;
        }elseif(bcdiv($num,$B,2) >= 10 && mb_substr(bcdiv($num,$B,2),3,1) >0){
            echo ">=10";
            echo "<br>";
            $numT = mb_substr(bcdiv($num,$B,2),0,4).'B';
            return $numT;
        }elseif(mb_substr(bcdiv($num,$B,2),2,2) ==0){
            echo "==0";
            echo "<br>";
            $numT = bcdiv($num,$B).'B';
            return $numT;
        }elseif(strpos(bcdiv($num,$B,2),".")==1 && mb_substr(bcdiv($num,$B,2),3,1) == 0){
            $numT = mb_substr(bcdiv($num,$B,2),0,4).'B';
            echo "31==";
            echo "<br>";
            return $numT;
        }elseif(strpos(bcdiv($num,$B,2),".")==1 && mb_substr(bcdiv($num,$B,2),3,1) > 1){
            $numT = mb_substr(bcdiv($num,$B,2),0,4).'B';
            echo ">1";
            echo "<br>";
            return $numT;
        }else{
            echo "else";
            echo "<br>";
            $numT = bcdiv($num,$B).'B';
            // echo strpos(bcdiv($num,$B,2),".");
            return $numT;
        };
    }elseif($num >= 1000000 && $num < 1000000000){
        if(bcdiv($num,$M,2) > 100){
            echo ">100";
            echo "<br>";
            $numT = bcdiv($num,$M).'M';
            return $numT;
        }elseif(bcdiv($num,$M,2) >= 10 && mb_substr(bcdiv($num,$M,2),3,1) >0){
            echo ">=10";
            echo "<br>";
            $numT = mb_substr(bcdiv($num,$M,2),0,4).'M';
            return $numT;
        }elseif(mb_substr(bcdiv($num,$M,2),2,2) ==0){
            echo "==0";
            echo "<br>";
            $numT = bcdiv($num,$M).'M';
            return $numT;
        }elseif(strpos(bcdiv($num,$M,2),".")==1 && mb_substr(bcdiv($num,$M,2),3,1) == 0){
            $numT = mb_substr(bcdiv($num,$M,2),0,4).'M';
            echo "31==";
            echo "<br>";
            return $numT;
        }elseif(strpos(bcdiv($num,$M,2),".")==1 && mb_substr(bcdiv($num,$M,2),3,1) > 1){
            $numT = mb_substr(bcdiv($num,$M,2),0,4).'M';
            echo ">1";
            echo "<br>";
            return $numT;
        }else{
            echo "else";
            echo "<br>";
            $numT = bcdiv($num,$M).'M';
            // echo strpos(bcdiv($num,$M,2),".");
            return $numT;
        }
    }elseif($num >= 1000 && $num < 1000000){
        if(bcdiv($num,$K,2) > 100){
            echo ">100";
            echo "<br>";
            $numT = bcdiv($num,$K).'K';
            return $numT;
        }elseif(bcdiv($num,$K,2) >= 10 && mb_substr(bcdiv($num,$K,2),3,1) >0){
            echo ">=10";
            echo "<br>";
            $numT = mb_substr(bcdiv($num,$K,2),0,4).'K';
            return $numT;
        }elseif(mb_substr(bcdiv($num,$K,2),2,2) ==0){
            echo "==0";
            echo "<br>";
            $numT = bcdiv($num,$K).'K';
            return $numT;
        }elseif(strpos(bcdiv($num,$K,2),".")==1 && mb_substr(bcdiv($num,$K,2),3,1) == 0){
            $numT = mb_substr(bcdiv($num,$K,2),0,4).'K';
            echo "31==";
            echo "<br>";
            return $numT;
        }elseif(strpos(bcdiv($num,$K,2),".")==1 && mb_substr(bcdiv($num,$K,2),3,1) > 1){
            $numT = mb_substr(bcdiv($num,$K,2),0,4).'K';
            echo ">1";
            echo "<br>";
            return $numT;
        }else{
            echo "else";
            echo "<br>";
            $numT = bcdiv($num,$K).'K';
            // echo strpos(bcdiv($num,$K,2),".");
            return $numT;
        };
    }else{
        if($num < 100 && strlen($num) >= 4){
            $numT = mb_substr($num,0,4);
            return $numT;
        }else{
            $numT = mb_substr($num,0,3);
            return $numT;
        };
    }
}
// echo to1000(123450000000000);

function Split($start,$end){
    if($end-$start <= 1 ){
        $arr = array(
            'start' => "$start",
            'end'   => "$end"
        );
        echo "<=1";
        return $arr;
    }elseif(is_int($start) && is_int($end)){
        $arr = array(
            'start'=>"$start",'end'=>"$end"
        );
        echo "int";
        return $arr;
    }elseif(is_int($start) && !is_int($end)){
        $endF= floor($end);
        $arr = array(
            'period1' => array('start'=>"$start",'end'=>"$endF"),
            'period2' => array('start'=>"$endF" ,'end'=>"$end")
        );
        echo "int float";
        return $arr;
    }elseif(!is_int($start) && is_int($end)){
        $startC = ceil($start);
        $arr = array(
            'period1' => array('start'=>"$start"    ,'end'=>"$startC"),
            'period2' => array('start'=>"$startC"   ,'end'=>"$end"),
        );
        echo "float & int";
        return $arr;
    }elseif(!is_int($start) && !is_int($end) && ceil($start) == floor($end)){
        $startC = ceil($start);
        $arr = array(
            'period1' => array('start'=>"$start"    ,'end'=>"$startC"),
            'period2' => array('start'=>"$startC"   ,'end'=>"$end"),
        );
        echo "C=F";
        return $arr;
    }
    else{
        $startC = ceil($start);
        $endF = floor($end);
        $arr = array(
            'period1' => array('start'=>"$start"    ,'end'=>"$startC"),
            'period2' => array('start'=>"$startC"   ,'end'=>"$endF"),
            'period3' => array('start'=>"$endF"     ,'end'=>"$end")
        );
        echo ">0";
        return $arr;
    }
}

print_r(Split(1,1.5));
?>
