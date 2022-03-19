<?php 
require_once('../models/user.php');
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    $full_name =$_POST['full_name'];
    $id = $_POST['id'];
    $cover_img = $_POST['cover_img'];
    $profile_img = $_POST['profile'];
        
        if(!empty($full_name)){
            update_user_profile($full_name,$id,$profile_img,$cover_img);
            
        };
        header("location:pages/account.php");
    
    }
?>