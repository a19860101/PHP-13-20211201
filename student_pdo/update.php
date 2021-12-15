<?php
    include('db.php');
    extract($_REQUEST);

    $skill = implode(',',$skill);

    // 方法一
    // $sql = "UPDATE students SET 
    //         name='$name',
    //         mail='$mail',
    //         phone='$phone',
    //         gender='$gender',
    //         edu='$edu',
    //         skill='$skill',
    //         content='$content'
    //         WHERE id = {$id}
    //         ";
    // mysqli_query($db,$sql);

    //方法二
    $sql = "UPDATE students SET name=?,mail=?,phone=?,gender=?,edu=?,skill=?,content=? WHERE id =?";
    $stmt = $db->prepare($sql);
    $stmt->bind_param('sssssssi',$name,$mail,$phone,$gender,$edu,$skill,$content,$id);
    $stmt->execute();
    
    header('location:show.php?id='.$id);