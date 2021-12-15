<?php
    include('db.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);
    //方法一
//     $sql = "INSERT INTO students(name,mail,phone,gender,edu,skill,content)
//             VALUES('$name','$mail','$phone','$gender','$edu','$skill','$content')";
//     mysqli_query($db,$sql);


	//方法二  
	$sql = "INSERT INTO students(name,mail,phone,gender,edu,skill,content)VALUES(?,?,?,?,?,?,?)";
	
	//預備陳述式
	$stmt = $db->prepare($sql);
	$stmt->bind_param('sssssss',$name,$mail,$phone,$gender,$edu,$skill,$content);
	$stmt->execute();



	header('location:index.php');
