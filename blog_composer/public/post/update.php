<?php
    include('../Controller/Post.php');


    Controller\Post::update($_REQUEST);

    header('location:show.php?id='.$_REQUEST['id']);