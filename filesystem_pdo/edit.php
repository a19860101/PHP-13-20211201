<?php
    include('pdo.php');
    extract($_REQUEST);
    $sql = 'SELECT * FROM gallery WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$id]);
    $data = $stmt->fetch();
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
    <h2>修改圖片名稱</h2>
    <form action="" method="post">
        <div>
            <label for="">圖片名稱</label>
            <input type="text" name="original_name" value="<?php echo $data['original_name'];?>">
        </div>
        <input type="hidden" name="id">
        <input type="submit" value="儲存">
        <input type="button" value="取消" onclick="history.back()">
    </form>
</body>
</html>