<?php require_once('../models/like.php');
$id =$_GET['id'];
$user_id=$_GET['user_id'];
if(($id  and $user_id )!==null){
    echo $id,$user_id;
    insert_like($id,$user_id);
}
header('location:../index.php');