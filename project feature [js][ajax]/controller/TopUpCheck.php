<?php
include_once("../controller/sessionCheck.php");
require_once('../model/userModel.php');
$user = getUser($_SESSION['username']); 
$username=$user['UserName'];
$userpass =$user['Password'];
$amount=$_POST['amount'];
$password=$_POST['pass']
//$useid= $user['username'];
//echo $useid;
//$username = $user[0];

        if ($userpass!=$password) {
            echo"wrong pass";
        }
        else{
            addMoney($username,$amount);
            $balance = ShowBalance($username);
            echo "<br>";
           echo "your New Balance is: ".$balance['Balance'];
    }




?>


