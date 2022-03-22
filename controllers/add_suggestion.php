<?php
 require_once('../models/friend.php');
 if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $usr_id = $_POST['user_id'];
    if($usr_id){
        get_add_friend($usr_id);
    }
    header('Location:../pages/friend.php');
}
?>