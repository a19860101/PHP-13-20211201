<?php
    session_start();
    if(isset($_POST['add'])){
        $_SESSION['NAME'] = $_POST['name'];
        echo '<script>alert("SESSION以記錄!")</script>';
        header('refresh:0;url=index.php');
    }
    if(isset($_POST['remove'])){
        session_destroy();
        header('location:index.php');
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
        <input type="submit" name="add" value="新增session">
    </form>
    <form action="" method="post">
        <input type="submit" name="remove" value="移除session">
    </form>
    <?php 
        if($_SESSION){
            echo $_SESSION['NAME'];
        }else{
            echo '沒有session';
        }
    ?>
</body>
</html>