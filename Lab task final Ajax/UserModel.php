<?php
require_once('db.php');

function search($empname){
    $conn = connection();
    $sql = "SELECT * FROM employer WHERE  username = '$empname' ";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
        return $result;
    } else {
        return false;
    }
}







?>