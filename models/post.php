<?php
/**
 * Your code here
 */
require_once('database.php');
function deletePost($id){
    global $database;
    $statement=$database->prepare("DELETE FROM posts WHERE post_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    header('Location:../pages/home.php');
}
function getItemById($id){
    global $database;
    $statement = $database->prepare("SELECT * FROM posts WHERE post_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    return $statement->fetch();
}
