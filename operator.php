<?php
// 算數
$x = 10;
$y = 5;

echo $x + $y;
echo "<br>";
echo $x - $y;
echo "<br>";
echo $x * $y;
echo "<br>";
echo $x / $y;
echo "<br>";
echo $x % $y;
echo "<br>";

// 比較
var_dump($x > $y);
echo "<br>";
var_dump($x < $y);
echo "<br>";
var_dump($x >= $y);
echo "<br>";
var_dump($x <= $y);
echo "<br>";
var_dump($x == $y);
echo "<br>";
var_dump($x === $y); //值以外 資料型別也要一樣
echo "<br>";
var_dump($x != $y);
echo "<br>";

// 指定

echo $x = $y; //x = 5
echo "<br>";
echo $x += $y; // x = 10
echo "<br>";
echo $x -= $y; // x = 5
echo "<br>"; 
echo $x *= $y; // x = 25
echo "<br>";
echo $x /= $y; // x = 5
echo "<br>";
echo $x %= $y; // x = 0
echo "<br>";

// 邏輯 and&& or not
$a = 100;
$b = 10;
// var_dump($x && $y); //因x = 0 為false
var_dump(!$a);

// 0 null "" 不存在的三種可能