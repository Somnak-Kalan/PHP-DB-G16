<?php
require_once('../models/user.php');
$get_users = get_all_user_info($id);
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
        session_start();
        if (!empty($full_name) && !empty($email) && !empty($password) && !empty($birth_day) && !empty($phone) && !empty($gender)) {
            $full_name == $user['full_name'];
            $email == $user['email'];
            $password == $user['password'];
            $birth_day == $user['birth_date'] and $gender == $user['gender'];
            $phone == $user['phone'];
            $acount_exists = true;
          
        }
    };    
};
if ($acount_exists !== false) {
    add_user_info($full_name, $email, $phone, $location, $birth_day, $gender, $password);
    header('location:../index.php');
} else {
    header('location:../form.php');
}

