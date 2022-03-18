<?php
// ================================= require database from models folder =======================
require_once "models/post.php";
// ================================= function to insert input into DB ==================================
function get_comment()
{
    global $database;
    $statement=$database->prepare("SELECT comment_content FROM comments");
    $statement->execute();
    return $statement-> fetchAll();

}
function count_comment()
{
    global $database;
    $statement=$database->prepare("SELECT COUNT(comment_content) FROM comments");
    $statement->execute();
    return $statement-> fetchAll();

}