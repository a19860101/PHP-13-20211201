<?php

    include(__DIR__.'/../Controller/Auth.php');
    
    use Controller\Auth;
    
    Auth::login($_REQUEST);