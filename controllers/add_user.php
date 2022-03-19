<?php
require_once('../models/user.php');
$get_users = get_all_user_info();
$acount_exists = false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $location = $_POST['location'];
    $birth_day = $_POST['date'];
    $gender = $_POST['gender'];
    $password = $_POST['password'];
    foreach ($get_users as $user) {
        // echo $id['user_id'];
        // session_start();
        if (!empty($full_name) && !empty($email) && !empty($password) || $birth_day || $location || $birth_day || $gender) {
            if ($full_name == $user['full_name'] and $email == $user['email'] and $password == $user['password']) {
                $acount_exists = true;
            }
            header('location:../index.php');
        } else {
            header('location:../form.php');
        };
    }
}
if ($acount_exists == false) {
    add_user_info($full_name, $email, $phone, $location, $birth_day, $gender, $password);
} else {
    header('location:../form/signup.php');
}
