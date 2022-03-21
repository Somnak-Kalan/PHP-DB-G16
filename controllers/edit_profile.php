<?php 
require_once('../models/user.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $full_name =$_POST['full_name'];
    $id = $_POST['id'];
    $cover_img = $_POST['cover_img'];
    $profile_img = $_POST['profile'];
    $cover_img=$_FILES['cover_img']['name'];
    $profile_img=$_FILES['profile']['name'];
    $target='../../account_images/'.$cover_img;
    $target='../../account_images/'.$profile_img;
    move_uploaded_file($_FILES['cover_img']['tmp_name'],$target);
    move_uploaded_file($_FILES['profile']['tmp_name'],$target);
        if(!empty($full_name)){
            update_user_profile($full_name,$id,$profile_img,$cover_img);
            header("location:../home_view.php");
            
        };
        // header("location:../index.php/account.php");
        
    }
?>