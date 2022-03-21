
<?php 
require_once('../models/post.php');
    $content =$_POST['content'];
    $id =$_POST['id'];
    $img=$_FILES['img']['name'];
    // $user_id=$_GET['user_id'];
    $target='../images/'.$img;
    move_uploaded_file($_FILES['img']['tmp_name'],$target);
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if($content || $id || $img){
            updatePost($content,$id,$img);

        }
        header('Location:../home_view.php') ;
    }

?>