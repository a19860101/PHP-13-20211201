<?php
    require_once('../vendor/autoload.php');
    use Gjun\Blog\Controller\File;

    $result = File::upload($_FILES['cover']);
    echo $result['name'];
    // var_dump($result['status']);
    if($result['status'] == 0){
        // echo '<script>alert('.$result['statusText'].')</script>';
        echo $result['statusText'];
        // header('refresh:0;url=test.php');
    }else{
        echo $result['statusText'];
        // echo '<script>alert('.$result['statusText'].')</script>';
        // header('refresh:0;url=test.php'); 
    }

    // echo '<script>alert("上傳成功!")</script>';
    // header('refresh:0;url=test.php');