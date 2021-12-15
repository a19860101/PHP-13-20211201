<?php
    include('db.php');
    extract($_REQUEST);
    //方法一
    // $sql = "DELETE FROM students WHERE id = {$id}";
    // mysqli_query($db,$sql);

    //方法二
    $sql = "DELETE FROM students WHERE id = ?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('i',$id);
    $stmt->execute();

    header('location:index.php');