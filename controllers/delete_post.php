<?php
require_once('../models/post.php');
 
if(isset($_GET['id'])){
    $id = $_GET['id'];
    deletePost($id);
}
header('Location:../index.php');

