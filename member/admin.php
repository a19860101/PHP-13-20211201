<?php
    session_start();
    if($_SESSION['AUTH']['role'] != 0){
        echo '<script>alert("您沒有權限!")</script>';
        header('refresh:0;url=index.php');
        return;
    }
?>
<?php include('template/header.php');?>
<?php include('template/nav.php');?>
<h1>ADMIN</h1>
<?php include('template/footer.php');?>