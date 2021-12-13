<?php
    include('db.php');
    // $id = $_GET['id'];
    extract($_REQUEST);
    $sql = "SELECT * FROM students WHERE id = {$id}";

    $result = mysqli_query($db,$sql);

    print_r($result);