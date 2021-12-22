<?php
    date_default_timezone_set('Asia/Taipei');
    include('pdo.php');

    extract($_REQUEST);
    $pw = md5(sha1($pw));
    $sql = 'INSERT INTO users(user,pw,created_at)VALUES(?,?,?)';
    $now = date('Y-m-d H:i:s');

    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user,$pw,$now]);

    echo '<script>alert("會員申請完成，請重新登入!")</script>';
    header('refresh:0;url=index.php');