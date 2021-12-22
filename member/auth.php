<?php
    include('pdo.php');
    session_start();

    extract($_REQUEST);

    $sql = 'SELECT * FROM users WHERE user = ?';
    $stmt = $pdo->prepare($sql);
    $stmt -> execute([$user]);

    $data = $stmt->fetch();

    if(!$data){
        echo '<script>alert("帳號不存在!")</script>';
        header('refresh:0;url=login.php');
        return;
    }
    if($data['pw'] == md5(sha1($pw))){
        $_SESSION['AUTH'] = $data;
        echo '<script>alert("登入成功!")</script>';
        header('refresh:0;url=index.php');
    }else{
        echo '<script>alert("帳號或密碼錯誤!")</script>';
        header('refresh:0;url=login.php');
    }