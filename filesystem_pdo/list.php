<?php
    include('pdo.php');
    $sql = 'SELECT * FROM gallery';
    $datas = $pdo->query($sql)->fetchAll();
    if(isset($_POST['del'])){
        extract($_POST);
        $sql = 'DELETE FROM gallery WHERE id = ?';
        $stmt = $pdo->prepare($sql);
        unlink('images/'.$name);
        $stmt->execute([$id]);
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
        echo count($datas) == 0 ? '<h3>目前無圖片</h3>':'';
        foreach($datas as $img){
    ?>
    <img src="images/<?php echo $img['name']; ?>" width="200">
    <a href="edit.php?id=<?php echo $img['id'];?>">編輯</a>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?php echo $img['id'];?>">
        <input type="hidden" name="name" value="<?php echo $img['name'];?>">
        <input type="submit" value="刪除" name="del">
    </form>
    <?php } ?>
</body>
</html>