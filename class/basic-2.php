<?php
    class User {
        private $title = 'Spider Man';
        public $name = 'Peter Parker';
        public $starred = 'Tom Holland';

        public function attack(){
            return 'Attack';
        }
        public function walk(){
            return 'Walk';
        }
        public function test(){
            return $this->title;
        }
    }
    //繼承
    class UserSkill extends User {
        
    }

    $spiderMan = new User;
    // echo $spiderMan->title;
    echo $spiderMan->test();

    // $spiderMan = new UserSkill;
    // echo $spiderMan->attack();
    // echo $spiderMan->starred;
    // echo $spiderMan->test();
    // echo $spiderMan->title;
