<?php 
require_once('../models/post.php');

function getValue($post){
    return isset($_POST[$post])? $_POST[$post]:null;
};
// session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $full_name = getValue('full_name');
    $email =getValue('email');
    $phone = getValue('number');
    $location = getValue('location');
    $birth_day = getValue('date');
    $gender = getValue('gender');
    $password = getValue('password');
    if(!empty($full_name) && !empty($email) && !empty($password) || $birth_day || $location || $birth_day || $gender){
            addUser($full_name,$email,$phone,$location,$birth_day, $gender,$password);
            header('location:../index.php');
    }
    else{
        header('location:../form.php');

    };
}
