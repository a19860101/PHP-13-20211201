<?php
    require_once('../../vendor/autoload.php');    
    use Gjun\Blog\Controller\Post;


    Post::update($_REQUEST);

    header('location:show.php?id='.$_REQUEST['id']);