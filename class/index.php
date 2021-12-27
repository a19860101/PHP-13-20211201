<?php

include('hello/User.php');
include('hello/Role.php');

$a = new hello\User\Show;
echo $a->walk();

echo '<br>';

$b = new hello\Role\Show;
echo $b->walk();