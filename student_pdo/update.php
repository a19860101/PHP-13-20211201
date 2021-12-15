<?php
    include('pdo.php');
    extract($_REQUEST);

    $skill = implode(',',$skill);

    $sql = "UPDATE students SET name=?,mail=?,phone=?,gender=?,edu=?,skill=?,content=? WHERE id =?";
    try{
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$name,$mail,$phone,$gender,$edu,$skill,$content,$id]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    
    header('location:show.php?id='.$id);