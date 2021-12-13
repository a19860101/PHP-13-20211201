<?php
    // echo "HELLO";
    // echo 'HELLO';

    // print_r("HELLO");

    // var_dump("HELLO");

    // 變數 

    $x = 100;
    $y = 'HELLO WORLD!@!';
    // echo $y;
    // print_r($x);
    // var_dump($x);

    
    //變數名稱規範
    /* 
        1. 大小寫有別
        2. 不可使用特殊符號，除了底線
        3. 只可使用英文開頭
    */

    // echo "您是第".$x."位訪客";
    // echo "您是第$x 位訪客";
    // echo '您是第$x 位訪客';
    // echo "您是第{$x}位訪客";
    // echo '您是第{$x}位訪客';

    //資料型態
    /* 
        1. 文字 string
        2. 整數 integer
        3. 浮點數 float
        4. 布林 boolean (ture,false)
    */

    $str = 'Hello';
    $i = -23;
    $f = 3.2;
    $b = true;
    // var_dump($b);

    // 常數

    define('USER','John');
    define('MAIL','asdf@gmail.com');
    echo MAIL;
