<?php

include('hello/User.php');
include('hello/Role.php');

use hello\Role\Show;

$a = new hello\User\Show;
echo $a->walk();

echo '<br>';

$b = new hello\Role\Show;
echo $b->walk();

echo '<br>';

$c = new Show;
echo $c->walk();