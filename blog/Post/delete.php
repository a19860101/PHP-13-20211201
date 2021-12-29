<?php
    include(__DIR__.'/../Controller/Post.php');

    use Controller\Post;

    Post::delete($_REQUEST);

    header('location:../index.php');