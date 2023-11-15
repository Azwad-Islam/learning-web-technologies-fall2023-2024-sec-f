<?php
include_once("../controller/sessionCheck.php");
require_once('../model/userModel.php');
$user = getUser($_SESSION['username']); 
$username=$user['UserName'];

//$useid= $user['username'];
//echo $useid;
//$username = $user[0];

if (isset($_POST["submit"])) {

    $amount = $_POST["amount"];
    //$password = $_POST["password"];
 
    if (!$_POST['amount']) {
        echo "Please fill up all required fields\n";
    } else {
        
        if (is_int($amount)) {
            echo"error amount type";
        }else
            addMoney($username,$amount);
            $balance = ShowBalance($username);
            echo "<br>";
           echo "your New Balance is: ".$balance['Balance'];
    }
}



?>


