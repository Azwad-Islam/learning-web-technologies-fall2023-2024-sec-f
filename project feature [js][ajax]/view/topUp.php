

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Top UP</title>
    <script src="../controller/topUpCheck.js"></script>
</head>

<body>


    
<form action="" method="POST" enctype="">
    <fieldset>
    <legend><h2 align="center" >Top Up</h2></legend>
    <h1>Enter Amount </h1>
    <input type="text" name ="amount" id="amount" />
    <br><br>
    <h1>Enter Password to verify </h1>
    <input type="Password" name ="Password" id="Password" />
    <br><br>
    <input type="button" name="click" value="Top Up" onclick="topUpCheck()" /> 
    </fieldset>
</form>
<h1><a href=UserHome.php>Home </a></h1>
<br><br>

<h1><a href="../controller/logout.php">logout </a></h1>
</body>

</html>


