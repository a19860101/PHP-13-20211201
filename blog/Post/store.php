<?php

    include(__DIR__.'/../Controller/Post.php');
    
    use Controller\Post\Post;
    
    Post::store($_REQUEST);

    header('location:../index.php');