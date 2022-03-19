<?php 
require_once('../models/user.php');
$get_users = get_all_user_info();
function getValue($post){
    return isset($_POST[$post])? $_POST[$post]:null;
};
$acount_exists = false;
foreach ($get_users as $user){
    // echo $id['user_id'];
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
            if($full_name==$user['full_name'] and $email==$user['email'] and $password==$user['password']){
                $acount_exists = true;
            }
            header('location:../index.php');
        }
        else{
            header('location:../form.php');
            
        };
    }
}
if($acount_exists==false){
    add_user_info($full_name,$email,$phone,$location,$birth_day, $gender,$password);
}
else{
    header('location:../form/signup.php');
}
