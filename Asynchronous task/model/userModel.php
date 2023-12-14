<?php
require_once('db.php');

function user_login($email, $password){
    $conneciton = get_connection();
    $sql = "SELECT * FROM persons WHERE email = '{$email}' AND password = '{$password}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);

    if($count == 1){
        return true;
    }else{
        return false;
    }
}

function check_user_email($email){
    $conneciton = get_connection();
    $sql = "SELECT email FROM persons WHERE email = '{$email}'";
    $result = mysqli_query($conneciton, $sql);
    $count = mysqli_num_rows($result);
    if($count == 1){
        return true;
    }else{
        return false;
    }
}
 
?>