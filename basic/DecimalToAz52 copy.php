<?php
    $DecimalNumber = 4073126405;
    $AZ52Numbe = "kLdXLX";

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
        $len = strlen($str);
        $y = 0;
        for($i = 0; $i< $len; $i++){
            $pos = strpos($base52,$str[$i]);
            $y = bcadd(bcmul(bcpow(52, $len - $i - 1),$pos), $y);
        }
        return $y;
    }
    echo DecimalToAZ52($DecimalNumber);
    echo "<br>";
    echo DecimalToAZ52(0);
    echo "<br>";
    echo DecimalToAZ52(26);
    echo "<br>";
    echo AZ52ToDecimal($AZ52Numbe);
    
?>