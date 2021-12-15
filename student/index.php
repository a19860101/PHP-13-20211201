<?php
    include('db.php');
    // include_once();
    // require();
    // require_once();
    $sql = 'SELECT * FROM students';
    // $result = mysqli_query($db,'SELECT * FROM students');
    //方法一
    // $result = mysqli_query($db,$sql);
    // while($row = mysqli_fetch_assoc($result)){
    //     print_r($row);
    // }
   
    // $datas = mysqli_fetch_all($result,MYSQLI_ASSOC);

    // 方法二
    // $result = $db->query($sql);

    // $datas = array();
    // while($row = $result->fetch_assoc()){
    //     $datas[] = $row;
    // }
    
    // $datas = $result->fetch_all(MYSQLI_ASSOC);

    $datas = $db->query($sql)->fetch_all(MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th {
            border: 1px solid #777;
            border-collapse: collapse;
        }
        td,th {
            padding: 10px;
        }
    </style>
</head>
<body>
    <h1>學員列表</h1>
    <a href="create.php">新增資料</a>
    <table>
        <tr>
            <th>姓名</th>
            <th>Mail</th>
            <th>連絡電話</th>
            <th>動作</th>
        </tr>
        <?php foreach($datas as $data){ ?>
        <tr>
            <td><?php echo $data['name']; ?></td>
            <td><?php echo $data['mail']; ?></td>
            <td><?php echo $data['phone']; ?></td>
            <td>
                <a href="show.php?id=<?php echo $data['id'];?>">檢視</a>
            </td>
        </tr>
        <?php } ?>
    <?php
        // foreach($datas as $data){
        //     echo "<tr>";
        //     echo "<td>{$data['name']}</td>";
        //     echo "<td>{$data['mail']}</td>";
        //     echo "<td>{$data['phone']}</td>";
        //     echo "</tr>";
        // }
    ?>
    </table>
</body>
</html>