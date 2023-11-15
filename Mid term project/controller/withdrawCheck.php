<?php
include_once("../controller/sessionCheck.php");
require_once('../model/userModel.php');

   
$user = getUser($_SESSION['username']);
$username=$user['UserName'];
$CurrentBalance = ShowBalance($username);

$CurrentBalance = $CurrentBalance['Balance'];

//$useid= $user['username'];
//echo $useid;
//$username = $user[0];

if (isset($_POST["submit"])) {

    $amount = $_POST["amount"];
    $password = $_POST["password"];
 
    if (!$_POST['amount']) {
        echo "Please fill up all required fields\n";
    } else {
        
        if (is_int($amount)) {
            echo"error amount type";
        }
       
        if($CurrentBalance!=0 && $CurrentBalance > $amount && $password == $_SESSION['password']){
            
            withdraw($username,$amount);
            $balance = ShowBalance($username);
            echo "<br>";
           echo "your New Balance is: ".$balance['Balance'];
        }
        else{
            echo "Invalid Amount or password";
        }
           
    }
}



?>


