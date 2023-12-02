<?php
include_once("../model/userModel.php");

$username = "";
$password = "";


if (isset($_POST["submit"])) {

    $username = $_POST["username"];
    $password = $_POST["password"];
 
    if (!$_POST['username'] || !$_POST['password']) {
        echo "Please fill up all required fields\n";
    } else {
        $user = login($username, $password);

        if ($user==false) {
            echo"error wrong Username or pass";
        } else {
           
            header('location:../view/UserHome.php');
        }
}
}

?>