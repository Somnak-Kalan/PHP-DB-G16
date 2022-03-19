
<?php
require_once('../models/post.php');
$content = $_POST['content'];
$id = $_POST['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($content)) {
        updatePost($content, $id);
    }
    header('Location:../index.php');
}
?>