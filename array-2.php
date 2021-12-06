<?php
    $foods = ['滷肉飯','咖哩飯','乾連湯','貢丸湯','燙青菜'];
    $users = [
        'id' => 1,
        'name' => 'John',
        'mail' => 'john@gmail.com'
    ];

    //count() 計算

    // echo count($foods);
    // echo count($users);

    //implode() 集中:陣列->字串

    // echo implode('、',$foods);
    // echo implode('__',$users);
    echo '<br>';
    
    //explode() 爆炸:字串->陣列


    $s = 'HELLO_PHP_MYSQL';
    // print_r( explode('P',$s) );
    // print_r( explode('_',$s) );

    //in_array()

    // var_dump(in_array('貢丸湯',$foods));
    // var_dump(in_array('蛋花湯',$foods));
    // print_r(in_array('蛋花湯',$foods));
    // var_dump(in_array('john',$users));

    //is_array()
    // var_dump(is_array($s));

    //extract() 解構

    // $name = $users['name'];
    // $mail = $users['mail'];
    // echo $mail;
    extract($users);
    // echo $name;
    // echo $mail;


    //compact()
    $title = 'iPhone 13';
    $size = '128GB';
    $price = 25800;
    $color = 'blue';

    $products = [
        'title' => $title,
        'size' => $size,
        'price' => $price,
        'color' => $color,
    ];

    // $products = compact('title','size','price','color');
    // print_r($products);



    shuffle($foods);
    echo implode(',',$foods);
