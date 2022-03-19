<?php 
require_once('../models/post.php');
    $full_name =$_POST['full_name'];
    $id = $_POST['name'];
    $cover_img = $_POST['cover_img'];
    $profile_img = $_POST['profile'];
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(!empty($full_name)){
            updateProfile($full_name,$id,$profile_img,$cover_img);
        }
        header("location:../index.php");
    }
?>