<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);
    $sql = "INSERT INTO students(name,mail,phone,gender,edu,skill,content)
            VALUES('$name','$mail','$phone','$gender','$edu','$skill','$content')";
    mysqli_query($db,$sql);

    header('location:index.php');