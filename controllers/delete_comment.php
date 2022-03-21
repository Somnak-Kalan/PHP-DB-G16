<?php
require_once('../models/comment.php');
 
if(isset($_POST['id'])){
    $id = $_POST['id'];
    echo $id;
    echo $id;
    delete_comment($id);
}
header('Location:../home_view.php');
