<?php

    include(__DIR__.'/../Controller/Post.php');
    
    use Controller\Post;
    
    Post::store($_REQUEST);

    header('location:../index.php');