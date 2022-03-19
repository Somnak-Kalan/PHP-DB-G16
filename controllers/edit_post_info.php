
<?php
require_once('../models/post.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $content = $_POST['content'];
    $id = $_POST['id'];
    // $img=$_FILES['img']['name'];
    // $target='../images/'.$img;
    // move_uploaded_file($_FILES['img']['tmp_name'],$target);

    $c_image= $_FILES['c_image']['name'];
    $c_image_temp=$_FILES['c_image']['tmp_name'];

    move_uploaded_file($c_image_temp , "../images/$c_image");
    if (!empty($content) or !empty($id) or $img) {
        updatePost($content,$id,$img);
    }
    // header('Location:../index.php') ;
}
// header('Location:../index.php');
?>
