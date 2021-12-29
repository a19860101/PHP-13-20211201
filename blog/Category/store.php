<?php
    include(__DIR__.'/../Controller/Category.php');

    Controller\Category::store($_REQUEST);

    header('location:index.php');