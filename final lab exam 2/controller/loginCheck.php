<?php
include_once("../controller/SessionCheck.php")
include_once("../model/userModel.php");

$data = $_POST['user'];
$user=json_decode($data);
$username = $user->username;
$password = $user->password;


 
        $user = login($username, $password);

        if ($user==false) {
            echo"error wrong Username or pass";
        } else if {
           $usertype = getUser($username);
           if($usertype=="buyer"){
            header('location:../view/userhome.php');
           }elseif ($usertype=="seller") {
            header('location:../view/sellerhome.php');
           }else{
            header('location:../view/adminhome.php');
           }

        }



?>