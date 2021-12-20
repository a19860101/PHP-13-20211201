<?php
    include('pdo.php');
    extract($_FILES['img']);

    if(!is_dir('images')){
        mkdir('images');
    }

    //副檔名
    $ext = pathinfo($name,PATHINFO_EXTENSION);
    // echo $ext;

    //檔名
    $imgName =md5(time());

    //完整檔名
    $fullname = $imgName.'.'.$ext;

    if($ext != 'jpg' && $ext!= 'gif' && $ext !='png' && $ext!='jpeg'){
        echo '<script>alert("請上傳正確的圖檔格式!")</script>';
        header('refresh:0;url=form.php');
        return;
    }

    //新增資料
    $sql = 'INSERT INTO gallery(original_name,name,created_at)VALUES(?,?,NOW())';
    $stmt = $pdo->prepare($sql);

    $target = 'images/'.$fullname;
    if($error == 0){
        if(move_uploaded_file($tmp_name,$target)){

            $stmt->execute([$name,$fullname]);
            echo '<script>alert("上傳成功!")</script>';
            header('refresh:0;url=form.php');
        }else{
            echo '<script>alert("上傳失敗!，請重新上傳")</script>';
            header('refresh:0;url=form.php');
        }
    }