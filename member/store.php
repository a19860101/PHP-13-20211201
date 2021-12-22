<?php
    date_default_timezone_set('Asia/Taipei');
    include('pdo.php');

    extract($_REQUEST);

    //檢查有沒有重複的會員名稱
    $sql_check = 'SELECT * FROM users WHERE user = ?';
    $stmt_check = $pdo->prepare($sql_check);
    $stmt_check->execute([$user]);
    if($stmt_check->rowCount() > 0){
        echo '<script>alert("此帳號名稱已被使用，請重新設定!")</script>';
        header('refresh:0;url=create.php');
        return; 
    }

    $pw = md5(sha1($pw));
    $sql = 'INSERT INTO users(user,pw,created_at)VALUES(?,?,?)';
    $now = date('Y-m-d H:i:s');

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user,$pw,$now]);

    echo '<script>alert("會員申請完成，請重新登入!")</script>';
    header('refresh:0;url=index.php');