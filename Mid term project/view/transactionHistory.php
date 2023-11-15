<?php
include_once("../controller/sessionCheck.php");
require_once('../model/userModel.php');
$username = $_SESSION['username'];
$data = Transaction($username);
$user = getUser($_SESSION['username']); 
$username = $user['UserName'];
echo "Hello, ".$username;
?>
<html lang="en">

<head>
    <title>Transaction History</title>
   
</head>

<body>


    
   
    <fieldset>
    <legend><h2 align="center" >Transaction History</h2></legend>
    <table border="1" align="center">
        <tr>
            <th bgcolor="0050ef">Transaction Type</th>
            <th bgcolor="0050ef">Amount</th>
            
        </tr>
        
        <?php for ($i=0; $i <count($data) ; $i++) {?>
        <tr>
            <td><?= $data[$i]['Type']?></td>
            <td><?= $data[$i]['Amount']?></td>
        </tr>
        <?php } ?>
    </table>
    </fieldset>
    <h1><a href="../controller/logout.php">logout </a></h1>
</body>

</html>


