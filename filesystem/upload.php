<?php
    // var_dump($_POST['img']);
    var_dump($_FILES['img']);

    extract($_FILES['img']);

    if(!is_dir('images')){
        mkdir('images');
    }
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    // echo $ext;
    $imgName =md5(time());
    // $imgName = md5(uniqid());

    $fullname = $imgName.'.'.$ext;
    echo $fullname;
    // if($error == 0){
        // move_uploaded_file($tmp_name,'images/'.$name);
    // }