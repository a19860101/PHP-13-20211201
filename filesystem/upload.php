<?php
    // var_dump($_POST['img']);
    var_dump($_FILES['img']);

    extract($_FILES['img']);

    if($error == 0){
        move_uploaded_file($tmp_name,$name);
    }