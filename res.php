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
    extract($_POST);
    echo $name;
    echo '<br>';
    echo $mail;
    echo '<br>';
    echo $phone;
    echo '<br>';
    echo $gender;
    echo '<br>';
    echo $edu;
    echo '<br>';
    echo implode(',',$skill);
       
        
       
    
    