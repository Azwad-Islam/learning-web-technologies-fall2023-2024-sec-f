<?php
include_once("../controller/withdrawCheck.php");
require_once("../controller/SessionCheck.php");
$user = getUser($_SESSION['username']); 
$username = $user['UserName'];
echo "Hello, ".$username;
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top UP</title>
   
</head>

<body>


    
<form action="" method="POST" enctype="">
    <fieldset>
    <legend><h2 align="center" >Top Up</h2></legend>
    <input type="text" name ="amount" id="amount"placeholder="Enter Amount to withdraw"<?php echo "Withdraw" ?> /><br />
    <br />
    <input type="password" name ="password" id="password" placeholder="Enter Password to confirm"<?php echo "Password" ?> />
    <br /><br />
    <input type="submit" value="withdraw" name="submit">
   
    
    </fieldset>
</form>
<h1><a href="../controller/logout.php">logout </a></h1>
</body>

</html>


