<?php
// ================================= require database from models folder =======================
require_once "../models/post.php";
// ================================== To check input NULL/NOT ==============================================
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $content=$_POST['content'];
    $img=$_FILES['img']['name'];
    $user_id=$_GET['user_id'];
    $target='../images/'.$img;
    move_uploaded_file($_FILES['img']['tmp_name'],$target);
    if(!empty($content) or $img or $user_id) {
        add_post($content,$img,$user_id);
        
    };
    header('Location:../home_view.php') ; 
}
