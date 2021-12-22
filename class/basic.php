<?php
    //物件導向
    class User {
        public $title;
        public $name;
        public $starred;
    }

    
    //建立實體
    $spiderMan = new User;

    $spiderMan->title = 'Spider Man';
    $spiderMan->name = 'Tony Parker';
    $spiderMan->starred = 'Tom Holland';
    // var_dump($spiderMan);

    echo $spiderMan->title;

    $ironMan = new User;
    $ironMan->title = '鋼鐵人';
    $ironMan->name = '東尼史塔克';
    $ironMan->starred = '小勞勃道尼';

    var_dump($ironMan);