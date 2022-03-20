<?php
require_once('../models/user.php');
$validatation=false;
$check_in=false;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    if (!empty($email) and !empty($password)) {
        $validatation=true;
        $check_login_data = check_login_data($email, $password);

        foreach ($check_login_data as $value) {
            if ($email == $value['email'] && $password == $value['password']){
                header("location:../index.php");
                $check_in=true;
            }else{
                echo"Wrong user name or password!";
            }
        }
    }if($validatation !=true or $check_in !=true){
        header("location:../form.php");
    }
}
