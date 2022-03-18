<?php
// ================================= require database from models folder =======================
require_once "../models/database.php";
// ================================= function to insert input into DB ==================================
function add_comment($comment)
{
    global $database;
    $statement=$database->prepare("INSERT INTO comments(comment_content)VALUES(:comment_content)");
    $statement->execute(
        [
            ':comment_content'=>$comment,
       
        ]
        );
        // return $statement -> rowCount()>0;
}
// ================================== To check input NULL/NOT ==============================================
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $comment=$_POST['comment'];
 
  
    if(!empty($comment)){
        add_comment($comment);
        
    }
    header('Location:../index.php') ; 
}
