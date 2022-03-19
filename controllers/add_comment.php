<?php
require_once('../models/comment.php');
// ================================== To check input NULL/NOT ==============================================
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_id = $_POST['user_id'];
    $comment = $_POST['comment'];
    if (!empty($comment) and !empty($user_id)) {
        add_comment($comment,$user_id);
    }
    header('Location:../index.php');
}
