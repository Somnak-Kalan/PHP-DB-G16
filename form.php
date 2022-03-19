<?php
require_once "templates/header.php";
    if(isset($_GET["forms"])){
        // get page file   
        $page = "form/".$_GET["forms"].".php";
        if(file_exists($page))
        {
            require_once $page;
        }
        else{
            require_once "form/404.php";
        }
    }
    else{
        require_once "form/signup.php";
    }
