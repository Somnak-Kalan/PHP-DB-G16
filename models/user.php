<?php
require_once('database.php');

// table users 
//@ return all for infomation to table user
function add_user_info($full_name,$email,$phone,$location,$birth_date,$gender,$password){
    global $database;
    $statement = $database->prepare("INSERT INTO users(full_name,email,phone,location,birth_date,gender,password)VALUES(:full_name,:email,:phone,:location,:birth_date,:gender,:password)");
    $statement->execute([
        ':full_name'=>$full_name,
        ':email'=>$email,
        ':phone'=>$phone,
        ':location'=>$location,
        ':birth_date'=>$birth_date,
        ':gender'=>$gender,
        ':password'=>$password
    ]);
}
//get all information from table user information
//@return all information
function get_all_user_info(){
    global $database;
    $statement=$database->prepare("SELECT * FROM users");
    $statement->execute();
    return $statement->fetchAll();
}


// Get the user name from user id
// @param $id (integer) the id of the user 
// @return user name 
function get_user_name_from($id){
    global $database;
    $statement=$database->prepare("SELECT * FROM users WHERE user_id=:id");
    $statement->execute([
        ':id'=>$id,
    ]);
    return $statement->fetch();
}
// update full_name,id profile_img,cover_img
// @param $id (integer) the id of the user 
// @return user_name and img
function update_user_profile($full_name,$id,$profile_img,$cover_img){
    global $database;
    $statement=$database->prepare("UPDATE users SET full_name=:full_name,profile_img=:profile_img,cover_img=:cover_img WHERE user_id=:id");
    $statement->execute([
        ':full_name'=>$full_name,
        ':profile_img'=>$profile_img,
        ':cover_img'=>$cover_img,
        ':id'=>$id,
    ]);
}
// Get id user_id from table user 
// @return all user_id
function get_user_id(){
    global $database;
    $statement = $database->prepare('SELECT user_id FROM users ORDER BY user_id DESC');
    $statement->execute();
    return $statement->fetch();
}
// Get select name to table friend
// @return all user
function get_friend(){
    global $database;
    $statement = $database->prepare('SELECT*FROM users GROUP BY full_name');
    $statement->execute();
    return $statement->fetchAll();
}
// check it to for login user 
// @return all information from table user to compare when user login
function check_login_data($email,$password){
    global $database;
    $statement = $database->prepare("SELECT email,password FROM users WHERE email=:email and password=:password");
    $statement->execute(
        [
            ':email'=>$email,
            ':password'=>$password,
        ]
    );
    return $statement->fetchAll();
    
}

// Get select name and images
// @return all user
function get_user_name_img(){
    global $database;
    $statement=$database->prepare("SELECT *FROM users  ");
    $statement->execute();
    return $statement->fetchAll();
}
