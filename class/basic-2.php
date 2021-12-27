<?php
    class User {
        private $title = 'Spider Man';
        protected $name = 'Peter Parker';
        public $starred = 'Tom Holland';

        public function attack(){
            return 'Attack';
        }
        public function walk(){
            return 'Walk';
        }
        public function test(){
            return $this->name;
        }
    }
    //繼承
    class UserSkill extends User {
        public function test2(){
            return $this->name;
        }
    }

    // $spiderMan = new User;
    // echo $spiderMan->title;
    // echo $spiderMan->test();

    $spiderMan = new UserSkill;
    // echo $spiderMan->attack();
    // echo $spiderMan->starred;
    echo $spiderMan->test2();
    // echo $spiderMan->title;
