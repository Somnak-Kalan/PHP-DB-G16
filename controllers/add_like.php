<?php require_once('../models/like.php');
$post_id =$_GET['id'];
$user_id=$_GET['user_id'];
$get_list_like = stop_like($_GET['id']);
$is_the_same_user = true;
foreach($get_list_like as $like){
    if($user_id==$_GET['user_id']){
        $is_the_same_user=false;
    };
}
if($is_the_same_user){
    insert_like($post_id,$user_id);
    header('location:../home_view.php');
}else{
    remove_like($post_id,$user_id);
    header('location:../home_view.php');
}