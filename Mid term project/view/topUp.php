<?php
include_once("../controller/topUpCheck.php");
require_once("../controller/SessionCheck.php");
$user = getUser($_SESSION['username']); 
$username = $user['UserName'];
echo " , ".$username;
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
    <h1>Enter Amount </h1>
    <input type="text" name ="amount" id="amount"<?php echo "topUp" ?> />
    <br><br>
    <h1>Enter Password to verify </h1>
    <input type="Password" name ="Password" id="Password"<?php echo "Password" ?> />
    <br><br>
    <input type="submit" value="TopUp" name="submit">    
    </fieldset>
</form>
<h1><a href=UserHome.php>Home </a></h1>
<br><br>

<h1><a href="../controller/logout.php">logout </a></h1>
</body>

</html>


