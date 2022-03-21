<?php
require_once('models/post.php');
require_once "templates/header.php";
require_once "templates/menu.php";


if (isset($_GET["pages"])) {
    // get page file   
    $page = "pages/" . $_GET["pages"] . ".php";
    if (file_exists($page)) {
        require_once $page;
    }
} else {
    require_once('pages/home.php');
}
require_once "templates/footer.php";
