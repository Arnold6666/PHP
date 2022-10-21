<?php
    class utils{
        public static function DecimalToAZ52($n){
            $base52 = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMONQRSTUVWXYZ";
            $base52 = str_split($base52);
            // var_dump($base52);
            $s = '';
            do{
                $s = $base52[bcmod($n,52)].$s;
                $n = bcdiv($n,52);
            }while($n >0);
            return $s;
        }
    }
    $new = new utils;
    echo $new->DecimalToAZ52(4073126405);
?>