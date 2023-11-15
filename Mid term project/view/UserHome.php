<?php
    include_once("../controller/sessionCheck.php");
    require_once('../model/userModel.php');
    $user = getUser($_SESSION['username']); 
    $username = $user['UserName'];
    echo "Hello, ".$username;

?>
<html lang="en">

<head>
    <title>home</title>
   
</head>

<body>
    <h1><a href="transactionHistory.php">1. Transaction History </a></h1>
    <h1><a href="topUp.php">2. TopUp </a></h1>
    <h1><a href="withdraw.php">3. withdraw </a></h1>
    <h1><a href="FaQ.php">4. FaQ </a></h1>
    <h1><a href="aboutUs.html">5. About our website </a></h1>
    <br />
    <h1><a href="../controller/logout.php">logout </a></h1>

</body>
</html>