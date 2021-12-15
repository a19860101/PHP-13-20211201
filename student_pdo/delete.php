<?php
    include('pdo.php');
    extract($_REQUEST);
    
    try{

        $sql = "DELETE FROM students WHERE id = ?";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    header('location:index.php');