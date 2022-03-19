<?php
// ================================= require database from models folder =======================
require_once "../models/database.php";
// ================================= function to insert input into DB ==================================
function add_post($content,$img,$user_id)
{
    global $database;
    $statement=$database->prepare("INSERT INTO posts(content,img,user_id)VALUES(:content,:img,:user_id)");
    $statement->execute(
        [
            ':content'=>$content,
            ':img'=>$img,
            ':user_id'=>$user_id,
        ]
        );
        // return $statement -> rowCount()>0;
}
// ================================== To check input NULL/NOT ==============================================
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $content=$_POST['content'];
    $img=$_POST['img'];
    $user_id=$_GET['user_id'];
  
    if(!empty($content) or $img or $user_id){
        add_post($content,$img,$user_id);
        
    }
    header('Location:../index.php') ; 
}
