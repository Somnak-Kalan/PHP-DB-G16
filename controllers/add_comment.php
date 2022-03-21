<?php
// ================================= require database from models folder =======================
require_once "../models/database.php";
// ================================= function to insert input into DB ==================================
function add_comment($comment,$post_id,$user_id)
{
    global $database;
    $statement = $database->prepare("INSERT INTO comments(comment_content,user_id,post_id)VALUES(:comment_content,:user_id,:post_id)");
    $statement->execute(
        [
            ':comment_content' => $comment,
            ':user_id'=>$user_id,
            ':post_id'=>$post_id,

        ]
    );
    // return $statement -> rowCount()>0;
}

// ================================== To check input NULL/NOT ==============================================
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $comment = $_POST['comment'];
    $id =$_GET['id'];
    $user_id=$_GET['user_id'];
    echo $id;
    echo $user_id;
    echo $comment;
    if (($comment and $id  and $user_id )!==null) {
        add_comment($comment,$id,$user_id);
    }
    header('Location:../home_view.php');
}

