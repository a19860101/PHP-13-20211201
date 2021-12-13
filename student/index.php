<?php
    include('db.php');
    // include_once();
    // require();
    // require_once();

    $sql = 'SELECT * FROM students';
    // $result = mysqli_query($db,'SELECT * FROM students');
    $result = mysqli_query($db,$sql);

    print_r($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>學員列表</h1>
</body>
</html>