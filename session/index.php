<?php
    session_start();
    if(isset($_POST['add'])){
        $_SESSION['NAME'] = $_POST['name'];
        echo '<script>alert("SESSION以記錄!")</script>';
        header('refresh:0;url=index.php');
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
        <input type="submit" name="add">
    </form>
    <?php 
        if(isset($_SESSION['NAME'])){
            echo $_SESSION['NAME'];
        }
    ?>
</body>
</html>