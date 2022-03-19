<?php
require_once('../models/post.php');
    $content =$_POST['content'];
    $id =$_POST['id'];
    $img = $_POST['img'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($content) or !empty($id) or $img){
            updatePost($content,$id,$img);
        }
        // header('Location:../index.php') ;
    }
    // header('Location:../index.php');
?>