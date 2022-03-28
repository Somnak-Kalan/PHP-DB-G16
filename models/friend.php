<?php require_once('database.php');
//get friend from user tables
// @return to table friend
function get_add_friend($user_id){
    global $database;
    $statement = $database->prepare('INSERT INTO suggestions(user_id)VALUES(:user_id) ');
    $statement->execute([
        ':user_id'=>$user_id,
    ]);
}