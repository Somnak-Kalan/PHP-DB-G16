<?php
require_once('../models/post.php');
 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    deletePost($id);
}
header('Location:../home_view.php');
