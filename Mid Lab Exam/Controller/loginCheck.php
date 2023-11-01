<?php

include_once("../model/userModel.php");
$id = "";
$password = "";
$userType = "";

if (isset($_POST["submit"])) {

    $id = $_POST["id"];
    $password = $_POST["password"];
 
    if (!$_POST['id'] || !$_POST['password']) {
        echo "Please fill up all required fields\n";
    } else {
        $user = login($id, $password);

        if ($user['User Type'] == 'admin') {
            header('location: ../view/admin_home.php');
        } else {
            header('location: ../view/user_home.php');
        }
    }
}
?>