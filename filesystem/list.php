<?php
    if(isset($_POST['del'])){
        // echo $_POST['img'];
        unlink($_POST['img']);
        echo '<script>alert("檔案已刪除!")</script>';
        header('refresh:0;url=list.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="form.php">上傳圖片</a>
    <div></div>
    <?php
        $imgs = glob('images/*');
        $imgNum = count($imgs);
        echo $imgNum == 0 ? '目前無圖片':'';
        foreach($imgs as $img){
    ?>
    <img src="<?php echo $img; ?>" width="200">
    <form action="" method="post">
        <input type="hidden" name="img" value="<?php echo $img;?>">
        <input type="submit" value="刪除" name="del">
    </form>
    <?php } ?>
</body>
</html>