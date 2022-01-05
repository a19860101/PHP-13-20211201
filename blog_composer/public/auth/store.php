<?php

    include('../../vendor/autoload.php');
        
    // use Gjun\Blog\Controller\Auth;
    
    Gjun\Blog\Controller\Auth::store($_REQUEST);

    
    echo '<script>alert("會員申請完成，請重新登入!")</script>';
    header('refresh:0;url=../index.php');