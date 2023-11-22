<?php
include_once("../controller/sessionCheck.php");
require_once('../model/userModel.php');
$user = getUser($_SESSION['username']); 
$username=$user['UserName'];
$userpass =$user['Password'];

//$useid= $user['username'];
//echo $useid;
//$username = $user[0];


if (isset($_POST["submit"])) {

    $amount = $_POST["amount"];
    $password = $_POST["Password"];
 
    if (!$_POST['amount']&&!$_POST['Password']) {
        echo "Please fill up all required fields\n";
    } else {
        
        if (is_int($amount)) {
            echo"error amount type";
        }if ($userpass!=$password) {
            echo"wrong pass";
        }
        else
            addMoney($username,$amount);
            $balance = ShowBalance($username);
            echo "<br>";
           echo "your New Balance is: ".$balance['Balance'];
    }
}



?>


