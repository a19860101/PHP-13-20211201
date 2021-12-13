<?php
    $db_host = 'localhost';
    $db_user = 'admin';
    $db_pw = 'admin';
    $db_name = 'php-13-20211201';

    //方法一
    // $db = @mysqli_connect($db_host,$db_user,$db_pw,$db_name) or die('資料庫連線錯誤!');
    $db = mysqli_connect($db_host,$db_user,$db_pw,$db_name) or die('資料庫連線錯誤!');