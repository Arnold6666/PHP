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
    $s = '';
    do{
        $s = $base52[bcmod($n,52)].$s;
        $n = bcdiv($n,52);
    }while($n >0);
    return $s;
}

function AZ52ToDecimal($str){
    $base52="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMONPQRSTUVWXYZ";
    $str = strval($str);
    $len = strlen($str);
    $y = 0;
    for($i = 0; $i< $len; $i++){
        $pos = strpos($base52,$str[$i]);
        $y = bcadd(bcmul(bcpow(52, $len - $i - 1),$pos), $y);
    }
    return $y;
}

function Format($num){
    $K = 1000;
    $M = 1000000;
    $B = 1000000000;
    $T = 1000000000000;
    if($num >= 1000000000000 && $num < 1000000000000000){
        if(bcdiv($num,$T,2) > 100){
            $numT = bcdiv($num,$T).'T';
            return $numT;
        }elseif(bcdiv($num,$T,2) >= 10 && mb_substr(bcdiv($num,$T,2),3,1) >0){
            $numT = mb_substr(bcdiv($num,$T,2),0,4).'T';
            return $numT;
        }elseif(mb_substr(bcdiv($num,$T,2),2,2) ==0){
            $numT = bcdiv($num,$T).'T';
            return $numT;
        }elseif(strpos(bcdiv($num,$T,2),".")==1 && mb_substr(bcdiv($num,$T,2),3,1) == 0){
            $numT = mb_substr(bcdiv($num,$T,2),0,4).'T';
            return $numT;
        }elseif(strpos(bcdiv($num,$T,2),".")==1 && mb_substr(bcdiv($num,$T,2),3,1) > 1){
            $numT = mb_substr(bcdiv($num,$T,2),0,4).'T';
            return $numT;
        }else{
            $numT = bcdiv($num,$T).'T';
            return $numT;
        };
    }elseif($num >= 1000000000 && $num < 1000000000000){
        if(bcdiv($num,$B,2) > 100){
            $numT = bcdiv($num,$B).'B';
            return $numT;
        }elseif(bcdiv($num,$B,2) >= 10 && mb_substr(bcdiv($num,$B,2),3,1) >0){
            $numT = mb_substr(bcdiv($num,$B,2),0,4).'B';
            return $numT;
        }elseif(mb_substr(bcdiv($num,$B,2),2,2) ==0){
            $numT = bcdiv($num,$B).'B';
            return $numT;
        }elseif(strpos(bcdiv($num,$B,2),".")==1 && mb_substr(bcdiv($num,$B,2),3,1) == 0){
            $numT = mb_substr(bcdiv($num,$B,2),0,4).'B';
            return $numT;
        }elseif(strpos(bcdiv($num,$B,2),".")==1 && mb_substr(bcdiv($num,$B,2),3,1) > 1){
            $numT = mb_substr(bcdiv($num,$B,2),0,4).'B';
            return $numT;
        }else{
            $numT = bcdiv($num,$B).'B';
            return $numT;
        };
    }elseif($num >= 1000000 && $num < 1000000000){
        if(bcdiv($num,$M,2) > 100){
            $numT = bcdiv($num,$M).'M';
            return $numT;
        }elseif(bcdiv($num,$M,2) >= 10 && mb_substr(bcdiv($num,$M,2),3,1) >0){
            $numT = mb_substr(bcdiv($num,$M,2),0,4).'M';
            return $numT;
        }elseif(mb_substr(bcdiv($num,$M,2),2,2) ==0){
            $numT = bcdiv($num,$M).'M';
            return $numT;
        }elseif(strpos(bcdiv($num,$M,2),".")==1 && mb_substr(bcdiv($num,$M,2),3,1) == 0){
            $numT = mb_substr(bcdiv($num,$M,2),0,4).'M';
            return $numT;
        }elseif(strpos(bcdiv($num,$M,2),".")==1 && mb_substr(bcdiv($num,$M,2),3,1) > 1){
            $numT = mb_substr(bcdiv($num,$M,2),0,4).'M';
            return $numT;
        }else{
            $numT = bcdiv($num,$M).'M';
            return $numT;
        }
    }elseif($num >= 1000 && $num < 1000000){
        if(bcdiv($num,$K,2) > 100){
            $numT = bcdiv($num,$K).'K';
            return $numT;
        }elseif(bcdiv($num,$K,2) >= 10 && mb_substr(bcdiv($num,$K,2),3,1) >0){
            $numT = mb_substr(bcdiv($num,$K,2),0,4).'K';
            return $numT;
        }elseif(mb_substr(bcdiv($num,$K,2),2,2) ==0){
            $numT = bcdiv($num,$K).'K';
            return $numT;
        }elseif(strpos(bcdiv($num,$K,2),".")==1 && mb_substr(bcdiv($num,$K,2),3,1) == 0){
            $numT = mb_substr(bcdiv($num,$K,2),0,4).'K';
            return $numT;
        }elseif(strpos(bcdiv($num,$K,2),".")==1 && mb_substr(bcdiv($num,$K,2),3,1) > 1){
            $numT = mb_substr(bcdiv($num,$K,2),0,4).'K';
            return $numT;
        }else{
            $numT = bcdiv($num,$K).'K';
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
function Split($start,$end){
    if($end-$start <= 1 ){
        $arr = array(
            'start' => "$start",
            'end'   => "$end"
        );
        return $arr;
    }elseif(is_int($start) && is_int($end)){
        $arr = array(
            'start'=>"$start",'end'=>"$end"
        );
        return $arr;
    }elseif(is_int($start) && !is_int($end)){
        $endF= floor($end);
        $arr = array(
            'period1' => array('start'=>"$start",'end'=>"$endF"),
            'period2' => array('start'=>"$endF" ,'end'=>"$end")
        );
        return $arr;
    }elseif(!is_int($start) && is_int($end)){
        $startC = ceil($start);
        $arr = array(
            'period1' => array('start'=>"$start"    ,'end'=>"$startC"),
            'period2' => array('start'=>"$startC"   ,'end'=>"$end"),
        );
        return $arr;
    }elseif(!is_int($start) && !is_int($end) && ceil($start) == floor($end)){
        $startC = ceil($start);
        $arr = array(
            'period1' => array('start'=>"$start"    ,'end'=>"$startC"),
            'period2' => array('start'=>"$startC"   ,'end'=>"$end"),
        );
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
        return $arr;
    }
}


echo CallDivideTimes(4);
echo "<br>";
echo DecimalToAZ52(4073126405);
echo "<br>";
echo AZ52ToDecimal('kLdXLX');
echo "<br>";
echo Format(1230);
echo "<br>";
print_r(Split(1,1.5));
echo "<br>";
?>
