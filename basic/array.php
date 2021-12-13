<?php
    // $a = array();
    // $a[0] = '滷肉飯';
    // $a[1] = '控肉販';
    // var_dump($a);

    // $b = array('滷肉飯','控肉販');
    // var_dump($b);

    $c = ['滷肉飯','控肉販','貢丸湯','乾連湯','咖哩飯'];
    // var_dump($c);
    // echo $c;
    // print_r($c);
    // echo $c[0];
    // echo $c[1];
    // echo $c[2];
    // echo $c[3];
    // for($i=0;$i<4;$i++){
    //     echo $c[$i];
    // }
    // echo '<br>';
    // $j = 0;
    // while($j < 4){
    //     echo $c[$j];
    //     $j++;
    // }

    // foreach($c as $food){
    //     echo $food;
    // }
    var_dump($c);
    echo '<br>';
    //關聯陣列
    // '鍵key' => '值value',
    $drinks = [
        'name'=>'紅茶',
        'price'=>30
    ];
    // var_dump( $drinks );
    // echo $drinks['name'];

    // foreach($drinks as $k => $v){
    //     echo $v;
    // }
    foreach($drinks as $value){
        echo $value;
    }