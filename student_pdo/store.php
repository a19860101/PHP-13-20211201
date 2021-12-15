<?php
    include('pdo.php');
    extract($_REQUEST);
    $skill = implode(',',$skill);

	$sql = "INSERT INTO students(name,mail,phone,gender,edu,skill,content)VALUES(?,?,?,?,?,?,?)";
	$stmt = $pdo->prepare($sql);
	$stmt->execute([$name,$mail,$phone,$gender,$edu,$skill,$content]);


	header('location:index.php');
