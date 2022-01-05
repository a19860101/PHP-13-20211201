<?php
    require_once('../../vendor/autoload.php');    
    use Gjun\Blog\Controller\Category;
    Category::store($_REQUEST);

    header('location:index.php');