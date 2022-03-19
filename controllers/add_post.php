<?php
// ================================= require database from models folder =======================
require_once "../models/post.php";
// ================================== To check input NULL/NOT ==============================================
if($_SERVER['REQUEST_METHOD']=='POST')
{
    $content=$_POST['content'];
    $img=$_POST['img'];
  
    if(!empty($content) or $img){
        add_post($content,$img);
        
    }
    header('Location:../index.php') ; 
}
