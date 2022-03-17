<?php
// ================================= require database from models folder =======================
require_once "../models/database.php";
// ================================= function to insert input into DB ==================================
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
// ================================== To check input NULL/NOT ==============================================
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $content=$_POST['content'];
    $img=$_POST['img'];
  
    if(!empty($content) or $img){
        add_post($content,$img);
        
    }
    header('Location:../views/display_post.php') ; 
}
