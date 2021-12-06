<?php
$x = 0;
// if
if($x > 0){
    echo 'success';
}
echo '<br>';

//if...else
if($x > 0){
    echo 'success2';
}else{
    echo 'error2';
}

echo $x > 0 ? 'success2':'error2';
echo '<br>';

//if...elseif
if($x > 0){
    echo '正';
}else if($x < 0){
    echo '負';
}
echo '<br>';

//if...elseif...else
if($x > 0){
    echo '正';
}else if($x < 0){
    echo '負';
}else{
    echo 'error3';
}
echo '<br>';
// switch

$a = 0;

switch($a){
    case 0:
        echo 0;
        break;
    case 1:
        echo 1;
        break;
    case 2:
        echo 2;
        break;
    case 3:
        echo 3;
        break;
    default:
        echo 'error!!!!';
}
echo '<br>';
switch($a) {
    case 0:
    case 1:
    case 2:
        echo 'hello';
        break;
    case 3:
        echo 'title';
        break;
    default:
        echo 'err';
}
echo '<br>';
switch(true){
    case $a > 0:
        echo '正數';
        break;
    case $a < 0:
        echo '負數';
        break;
    default:
        echo 'err3';
}