<?php
require_once('../models/user.php');
$validatation = false;
$check_in = false;
session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $_SESSION['email']=false;
    $_SESSION['password']=false;
    if (!empty($email) and !empty($password)) {
        $validatation = true;
        $check_login_data = check_login_data($email, $password);
        
        foreach ($check_login_data as $value) {
            if($email == $value['email'] && $password == $value['password']){
                header("location:../home_view.php");
                $check_in = true;
                $_SESSION['email']=true;
                $_SESSION['password']=true;
            } else {
                echo "Wrong user name or password!";
            }
        }
    }
    if ($validatation != true or $check_in != true) {
        header("location:../index.php");

        
    }
}
