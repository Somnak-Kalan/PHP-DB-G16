<?php
require_once('database.php');
// Get all info to table like
//@return all data to table like
function insert_like($post_id,$user_id){
    global $database;
    $statement=$database->prepare("INSERT INTO posts_likes(post_id,user_id)VALUES(:post_id,:user_id)");
    $statement->execute([
        ':post_id'=>$post_id,
        ':user_id'=>$user_id
    ]);
}
// Get count like 
// @return all like to post
function count_like($post_id){
    global $database;
    $statement=$database->prepare('SELECT COUNT(post_id) as "number" FROM posts_likes WHERE post_id=:id') ;
    $statement->execute([
        ':id'=>$post_id
    ]);
    return $statement->fetch();
} 

function stop_like($post_id){
    global $database;
    $statement=$database->prepare('SELECT * FROM posts_likes WHERE post_id=:post_id');
    $statement->execute([
        ':post_id'=>$post_id
    ]);
    return $statement->fetchAll();

}
function remove_like($post_id,$user_id){
    global $database;
    $statement=$database->prepare("DELETE FROM posts_likes WHERE post_id=:post_id AND user_id=:user_id");
    $statement->execute([
        ':user_id'=>$user_id,
        ':post_id'=>$post_id,
    ]);
}