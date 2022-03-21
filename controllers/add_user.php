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
    session_start();
    foreach ($get_users as $user) {
        if($full_name == $user['full_name'] && $password == $user['password'] && $email == $user['email'] ){
            echo "Please";
            $acount_exists= true;
            
        }
           
        
          
    //     }
    };
    if($acount_exists!== true){
        if(!empty($full_name) && !empty($email) && !empty($password)){
            add_user_info($full_name, $email, $phone, $location, $birth_day, $gender, $password);

        }

    }
};

