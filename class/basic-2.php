<?php
    class User {
        public $title = 'Spider Man';
        public $name = 'Peter Parker';
        public $starred = 'Tom Holland';

        public function attack(){
            return 'Attack';
        }
        public function walk(){
            return 'Walk';
        }
    }
    //繼承
    class UserSkill extends User {
        public function test(){
            
        }
    }

    $spiderMan = new UserSkill;
    // echo $spiderMan->attack();
    echo $spiderMan->starred;
