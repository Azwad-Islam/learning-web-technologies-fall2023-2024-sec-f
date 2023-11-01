<?php
include_once("../controller/sessionCheck.php");
require_once('../model/userModel.php');

$user = getUser($_SESSION['userId']); 

$CurrentPassword = "";
$newPass="";
$conPass="";



if (isset($_POST["change"])) {
        $CurrrentPassword = $_POST["Current"];
        $newPass= $_POST["new"];
        $conPass= $_POST["Confirm"];

		if ( $user['Password'] == $Currentpassword && $newPass == $conPass ) {
            
                $user = UpdatePass(id,$newPass);
                
			
        } else {
            echo 'Wrong pass';
        }

    }

?>
     