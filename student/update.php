<?php
    include('db.php');
    extract($_REQUEST);

    $skill = implode(',',$skill);

    $sql = "UPDATE students SET 
            name='$name',
            mail='$mail',
            phone='$phone',
            gender='$gender',
            edu='$edu',
            skill='$skill',
            content='$content'
            WHERE id = {$id}
            ";
    mysqli_query($db,$sql);

    header('location:show.php?id='.$id);