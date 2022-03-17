<?php
/**
 * Your code here
 */
require_once('database.php');
// craete post 
function getPosts()
{
    global $database;
    $statement=$database->prepare("SELECT * FROM posts ");
    $statement->execute();
    return $statement-> fetchAll();
}


// delete post  
function deletePost($id){
    global $database;
    $statement=$database->prepare("DELETE FROM posts WHERE post_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    header('Location:../pages/home.php');
}
// get id of post to delete and update  
function getPostById($id){
    global $database;
    $statement = $database->prepare("SELECT * FROM posts WHERE post_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    return $statement->fetch();
}
// update post when user want to change    
function updatePost($content,$id)
{
    global $database;
    $statement=$database->prepare("UPDATE posts SET content=:content WHERE post_id=:id");
    $statement->execute([
        ':content' => $content,
        ':id' => $id,
    ]);
}