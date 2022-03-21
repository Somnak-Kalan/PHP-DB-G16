<?php
// ================================= require database from models folder =======================
require_once "database.php";
// ================================= function to insert input into DB ==================================
function get_comment_content($post_id){
    global $database;
    // echo $comment_id;
    $statement=$database->prepare('SELECT*FROM comments WHERE post_id=:id') ;
    $statement->execute([
        ':id'=>$post_id,
    ]);
    return $statement->fetchAll();
} 
function count_comment($post_id){
    global $database;
    $statement=$database->prepare('SELECT COUNT(comment_content) as "comment" FROM comments WHERE post_id=:id') ;
    $statement->execute([
        ':id'=>$post_id
    ]);
    return $statement->fetch();
} 

function delete_comment($id){
    global $database;
    $statement=$database->prepare("DELETE FROM comments WHERE comment_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
}

function update_comment($comment_content,$comment_id)
{
    global $database;
    $statement=$database->prepare("UPDATE comments SET comment_content=:comment_content WHERE comment_id=:id");
    $statement->execute([
        ':comment_content' => $comment_content,
        ':id' => $comment_id
    ]);
}

function get_comment_by_id($id){
    global $database;
    $statement = $database->prepare("SELECT * FROM comments WHERE comment_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    return $statement->fetch();
}