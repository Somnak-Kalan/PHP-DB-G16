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
function updatePost($content)
{
    global $database;
    $statement=$database->prepare("UPDATE posts SET content=:content WHERE post_id=:id");
    $statement->execute([
        ':content' => $content,
        ':id' => $id,
    ]);
}
// table users 
function addUser($full_name,$email,$phone,$location,$birth_date,$gender,$password){
    global $database;
    $statement = $database->prepare("INSERT INTO users(full_name,email,phone,location,birth_date,gender,password)VALUES(:full_name,:email,:phone,:location,:birth_date,:gender,:password)");
    $statement->execute([
        ':full_name'=>$full_name,
        ':email'=>$email,
        ':phone'=>$phone,
        ':location'=>$location,
        ':birth_date'=>$birth_date,
        ':gender'=>$gender,
        ':password'=>$password,
    ]);
}
function getUser() {
    global $database;
    $statement=$database->prepare("SELECT * FROM users");
    $statement->execute();
    return $statement->fetchAll();
}
// ----------------