<?php
 require_once('../models/comment.php');
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
     $comment_id = $_POST['id'];
     echo $comment_id;
     $comment_content = $_POST['comment_content'];
     if($comment_content || $id ){
        update_comment($comment_content, $comment_id);
      }
     header('Location:../home_view.php') ;
 }
?>