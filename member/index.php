<?php 
    include('template/header.php'); 
    session_start();
?>
<?php include('template/nav.php'); ?>
<?php
    if($_SESSION){
        echo $_SESSION['AUTH']['user'].'你好';
    }else{
        echo '訪客你好';
    }
?>
<?php include('template/footer.php'); ?>