<?php

    // if(isset($_GET['name'])){
    //     var_dump($_GET);
    //     echo '<br>';
        
    //     echo $_GET['name'];
    //     echo '<br>';
    //     echo $_GET['mail'];
    // }else{

    //     var_dump($_POST);
    //     echo '<br>';
    
    //     echo $_POST['name'];
    //     echo '<br>';
    //     echo $_POST['mail'];
    // }
    // extract($_POST);
    // extract($_REQUEST);
    // echo $_REQUEST['name'];

    // echo trim($name);
    // var_dump(trim($name));
    // var_dump(stripslashes($name));
    // var_dump(htmlspecialchars($name));//< > " ' &
    // var_dump(ctype_space($name));
  
    // $name = check($name);
    // var_dump($name);

    // var_dump($name);
    // echo '<br>';
    // echo $mail;
    // echo '<br>';
    // echo $phone;
    // echo '<br>';
    // echo $gender;
    // echo '<br>';
    // echo $edu;
    // echo '<br>';
    // echo implode(',',$skill);
    // echo '<br>';
    // echo $content;
       
    // var_dump($_POST);
    // var_dump($_REQUEST);
    
    // header('refresh:5;url=form.php');

    // header('location:form.php');
    
    function check($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
       
    extract($_REQUEST);
    if(empty($name) || ctype_space($name)){
        echo 'name欄位必填';    
    }else{
        $name = check($name);
        echo $name;
    }
    if(empty($mail) || ctype_space($mail)){
        echo 'mail欄位必填';    
    }else{
        $mail = check($mail);
        echo $mail;
    }