<?php
include_once("../controller/SessionCheck.php")
include_once("../model/userModel.php");

$data = $_POST['user'];
$user=json_decode($data);
$username = $user->username;
$password = $user->password;
$usertype = $user->usertype;


 
        $user = registration($username, $password,usertype);

        if ($user==false) {
            echo"error user exists";
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