<?php
require_once('database.php');
// Get all posts to table posts
// @return all posts 
function add_post($content,$img)
{
    global $database;
    $statement=$database->prepare("INSERT INTO posts(content,img)VALUES(:content,:img)");
    $statement->execute(
        [
            ':content'=>$content,
            ':img'=>$img,
        ]
        );
        // return $statement -> rowCount()>0;
}


// Get all posts
// @return all posts 
function get_all_posts()
{
    global $database;
    $statement=$database->prepare("SELECT * FROM posts ORDER BY post_id DESC");
    $statement->execute();
    return $statement-> fetchAll();
}


// Delete the post from given id
// @param $id (integer) the id of the post
function deletePost($id){
    global $database;
    $statement=$database->prepare("DELETE FROM posts WHERE post_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    header('Location:../pages/home.php');
}
    

// Get the post from the id
// @param $id (integer) the id of the post 
// @return the post related to given id
function get_post_by_id($id){
    global $database;
    $statement = $database->prepare("SELECT * FROM posts WHERE post_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    return $statement->fetch();
}
// update post when user want to change    
function updatePost($content,$id,$img)
{
    global $database;
    $statement=$database->prepare("UPDATE posts SET content=:content, img=:img WHERE post_id=:id");
    $statement->execute([
        ':content' => $content,
        ':id' => $id,
        ':img' => $img,
    ]);
}