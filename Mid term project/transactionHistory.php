<?php

    $con = mysqli_connect('localhost', 'root', '', 'projectdb');
    $sql = "SELECT `UserId`, `Type`, `Amount`, `Time` FROM `transactionhistory` WHERE UserId = 'Azwad1';";
    $result = mysqli_query($con, $sql);
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <title>Transaction History</title>
   
</head>

<body>
<?php while($data = mysqli_fetch_assoc($result)){ ?>
<?php// $user = mysqli_fetch_assoc($result); ?>
    
    <h1 align='right'>User Id :<?php echo $data['UserId'] ?></h1>
    <fieldset>
    <legend><h2 align="center" >Transaction History</h2></legend>
    <table border="1" align="center">
        <tr>
            <th bgcolor="0050ef">Transaction Type</th>
            <th bgcolor="0050ef">Amount</th>
            <th bgcolor="0050ef">Date & Time</th>
        </tr>
        
        <tr>
            <td><?=$data['Type']?></td>
            <td><?=$data['Amount']?></td>
            <td><?=$data['Time']?></td>
        </tr>
        <?php  } ?>
        <tr>
            <td>Withdrawn</td>
            <td>Row 2, Column 2</td>
            <td>Row 2, Column 3</td>
        </tr>
    </table>
    </fieldset>
</body>

</html>


