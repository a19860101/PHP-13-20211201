<?php

    include(__DIR__.'/../Controller/Auth.php');
    
    use Controller\Auth;
    
    $result = Auth::login($_REQUEST);
    if($result == 0){
        echo '<script>alert("登入成功!")</script>';
        header('refresh:0;url=../index.php');
    }else{
        echo '<script>alert("帳號或密碼錯誤!")</script>';
        header('refresh:0;url=login.php');
    }