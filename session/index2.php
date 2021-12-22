<?php
    session_start();
    if(isset($_POST['add'])){
        $_SESSION['AUTH'] = $_POST;
        echo '<script>alert("SESSION以記錄!")</script>';
        header('refresh:0;url=index2.php');
    }
    if(isset($_POST['remove'])){
        // session_destroy();
        unset($_SESSION['AUTH']);
        header('location:index2.php');
    }
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
    <h1>session</h1>
    <form action="" method="post">
        <input type="text" name="name">
        <input type="password" name="pw">
        <input type="submit" name="add" value="新增session">
    </form>
    <form action="" method="post">
        <input type="submit" name="remove" value="移除session">
    </form>
    <?php 
    // var_dump($_SESSION);
        if($_SESSION){
        //    var_dump($_SESSION);
            echo $_SESSION['AUTH']['name'];
            echo '<br>';
            echo $_SESSION['AUTH']['pw'];
        }else{
            echo '沒有session';
        }
    ?>
</body>
</html>