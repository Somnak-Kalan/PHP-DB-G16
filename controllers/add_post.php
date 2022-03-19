<?php
// ================================= require database from models folder =======================
require_once "../models/post.php";
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
