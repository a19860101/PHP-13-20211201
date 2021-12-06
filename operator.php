<?php
$x = 10;
$y = 6;

// 算術運算子
echo $x + $y;
echo '<br>';
echo $x - $y;
echo '<br>';
echo $x * $y;
echo '<br>';
echo $x / $y;
echo '<br>';
echo $x % $y;
echo '<br>';

// 比較運算子
var_dump($x > $y);//true
echo '<br>';
var_dump($x >= $y);//true
echo '<br>';
var_dump($x < $y);//false
echo '<br>';
var_dump($x <= $y);//false
echo '<br>';
var_dump($x == $y);//false
echo '<br>';
var_dump($x != $y);//true
echo '<br>';

// 指定運算子

// var_dump($x = $y); // 6
echo '<br>';
// var_dump($x += $y); // $x = $x + $y 12
echo '<br>';
// var_dump($x -= $y); // $x = $x - $y 6
echo '<br>';
// var_dump($x *= $y); // $x = $x * $y 36
echo '<br>';
// var_dump($x /= $y); // $x = $x / $y 6 
echo '<br>';
// var_dump($x %= $y); // $x = $x % $y 0
echo '<br>';

// 邏輯運算子 AND(&&) OR(||) NOT(!)

var_dump($x > 0 && $y > 0);
echo '<br>';
var_dump($x > 0 || $y < 0);
echo '<br>';
var_dump(!$x);
echo '<br>';
//三元運算子 ? :

$a = 110;

echo $a > 0 ? '正數' : '負數';

