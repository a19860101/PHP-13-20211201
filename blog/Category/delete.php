<?php
    include(__DIR__.'/../Controller/Category.php');
    Controller\Category::delete($_REQUEST);
    header('location:index.php');