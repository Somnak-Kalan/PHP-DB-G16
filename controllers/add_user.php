<?php
require_once('../models/user.php');
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $password = $_POST['password'];
    $number = preg_match('@[0-9]@', $password);
    $uppercase = preg_match('@[A-Z]@', $password);
    $lowercase = preg_match('@[a-z]@', $password);
    $specialChars = preg_match('@[^\w]@', $password);
    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $phone = $_POST['number'];
    $location = $_POST['location'];
    $birth_day = $_POST['date'];
    $gender = $_POST['gender'];
    $is_the_same = false;
    $get_users = check_signup();
    foreach ($get_users as $user){
        if((!empty($full_name)==$user['full_name']) && (!empty($email)==$user['email']) && (!empty($password)==$user['password'])){
            $is_the_same=true;
        }
    }
    if($is_the_same!==false){
        if((strlen($password) < 8 || !$number || !$uppercase || !$lowercase || !$specialChars) && (!empty($email)==$user['email'])) {
            header('Location:../form/signup.php');

        } else {
            if(($full_name!==$user['full_name']) and ($email!==$user['email']) and ($password!==$user['password'])){
                        add_user_info($full_name, $email, $phone, $location, $birth_day, $gender, $password);
                        header('Location:../home_view.php');

            }else{
                $_SESSION['full_name']=true;
                header('Location:../form/signup.php');
            }
               
                

        };

    }


};

