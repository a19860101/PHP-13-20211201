<?php
    //物件導向
    class User {
        public $title;
        public $name;
        public $starred;

        public function attack(){
            return 'Attack';
        }
        public function walk(){
            return 'Walk';
        }
    }

    
    //建立實體
    $spiderMan = new User;

    $spiderMan->title = 'Spider Man';
    $spiderMan->name = 'Tony Parker';
    $spiderMan->starred = 'Tom Holland';
    // var_dump($spiderMan);

    echo $spiderMan->title;
    echo $spiderMan->attack();

    // $ironMan = new User;
    // $ironMan->title = '鋼鐵人';
    // $ironMan->name = '東尼史塔克';
    // $ironMan->starred = '小勞勃道尼';

    // var_dump($ironMan);