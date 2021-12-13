<?php
    include('db.php');
    // $id = $_GET['id'];
    extract($_REQUEST);
    $sql = "SELECT * FROM students WHERE id = {$id}";

    $result = mysqli_query($db,$sql);
    $data = mysqli_fetch_assoc($result);
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
    <ul>
        <li>姓名:<?php echo $data['name'];?></li>
        <li>電話:<?php echo $data['phone'];?></li>
        <li>Mail:<?php echo $data['mail'];?></li>
        <li>學歷:<?php echo $data['edu'];?></li>
        <li>性別:<?php echo $data['gender'];?></li>
        <li>專長:<?php echo $data['skill'];?></li>
        <li>備註:<?php echo $data['content'];?></li>
    </ul>
    <form action="delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $data['id'];?>">
        <input type="submit" value="刪除" onclick="return confirm('確認刪除？')">
    </form>
    <a href="index.php">學員列表</a>
    
</body>
</html>