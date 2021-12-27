<?php

class User {
    public $name = 'john';
    function test(){
        return $this->name;
    }
    //靜態方法
    static function test2(){
        return 'Hello Static Function';
    }
}

// $hulk = new User;
// echo $hulk->test2(123);
// echo $hulk->test2();

echo User::test2();