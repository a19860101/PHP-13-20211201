<?php

// function test(){
//     $a = 100;
//     echo $a;
// }

// function total(){
//     $x = 100;
//     return $x * 1.5;
// }

// $t = total();

// var_dump($t);

// echo total();

function total($price,$tax){
    return $price * $tax;
}

echo total(999,1.1);