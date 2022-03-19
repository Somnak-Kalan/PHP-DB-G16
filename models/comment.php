<?php
// ================================= require database from models folder =======================
require_once "models/database.php";
// ================================= function to insert input into DB ==================================
function get_all_comment()
{
    global $database;
    $statement = $database->prepare("SELECT comment_content FROM comments");
    $statement->execute();
    return $statement->fetchAll();
}
function count_comment()
{
    global $database;
    $statement = $database->prepare("SELECT COUNT(comment_content) FROM comments");
    $statement->execute();
    return $statement->fetchAll();
}

// ================================= function to insert input into DB ==================================
function add_comment($comment)
{
    global $database;
    $statement = $database->prepare("INSERT INTO comments(comment_content)VALUES(:comment_content)");
    $statement->execute(
        [
            ':comment_content' => $comment,

        ]
    );
}