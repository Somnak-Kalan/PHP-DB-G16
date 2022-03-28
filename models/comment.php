<?php
// ================================= require database from models folder =======================
require_once "database.php";
// ================================= function to insert input into DB ==================================
// get comment from user insert from post  
// @return all comment below post
function get_comment_content($post_id){
    global $database;
    $statement=$database->prepare('SELECT*FROM comments  WHERE post_id=:id ') ;
    $statement->execute([
        ':id'=>$post_id,
    ]);
    return $statement->fetchAll();
} 
// count comments by select only attribute comment_content
// @return number that count from column comment_content
function count_comment($post_id){
    global $database;
    $statement=$database->prepare('SELECT COUNT(comment_content) as "comment" FROM comments WHERE post_id=:id') ;
    $statement->execute([
        ':id'=>$post_id
    ]);
    return $statement->fetch();
} 
// delete comments from post 
// @return id comment for delete
function delete_comment($id){
    global $database;
    $statement=$database->prepare("DELETE FROM comments WHERE comment_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
}
//update comments from table comments
//@ return edit to comment table
function update_comment($comment_content,$comment_id)
{
    global $database;
    $statement=$database->prepare("UPDATE comments SET comment_content=:comment_content WHERE comment_id=:id");
    $statement->execute([
        ':comment_content' => $comment_content,
        ':id' => $comment_id
    ]);
}
// get comment by  $id from table comments
// @return comments
function get_comment_by_id($id){
    global $database;
    $statement = $database->prepare("SELECT * FROM comments WHERE comment_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    return $statement->fetch();
}