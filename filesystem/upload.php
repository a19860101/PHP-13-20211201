<?php
    // var_dump($_POST['img']);
    var_dump($_FILES['img']);

    extract($_FILES['img']);

    if(!is_dir('images')){
        mkdir('images');
    }

    //副檔名
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    // echo $ext;

    //檔名
    $imgName =md5(time());
    // $imgName = md5(uniqid());
    //完整檔名
    $fullname = $imgName.'.'.$ext;

    if($ext != 'jpg' && $ext!= 'gif' && $ext !='png' && $ext!='jpeg'){
        echo '<script>alert("請上傳正確的圖檔格式!")</script>';
        header('refresh:0;url=form.php');
        return;
    }
    if($error == 0){
        move_uploaded_file($tmp_name,'images/'.$name);
    }