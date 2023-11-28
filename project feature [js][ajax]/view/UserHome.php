<?php
    include_once("../controller/sessionCheck.php");
    require_once('../model/userModel.php');
    $user = getUser($_SESSION['username']); 
    $username = $user['UserName'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        body {
            
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .contents {
            text-align: left;
        }
        h1 {
            background-color: #4caf50;
            color: white;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }

        h2 {
            text-align: right;
            color: black;
            padding: 10px;
            border-radius: 5px;
            margin: 10px 0;
        }
        .username {
            text-align: right;
            margin-bottom: 20px; /* Added margin to create space between the username and content */
        }

        a {
            text-decoration: none;
            color: white;
        }

        a:hover {
            text-decoration: underline;
        }

        /* Change the button background color */
        button {
            background-color: #e74c3c; /* Change this color to your preference */
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        button a {
            color: white;
            text-decoration: none;
        }

        button:hover {
            background-color: #c0392b; /* Change this color to your preference */
        }
    </style>
</head>

<body>
    <centre>
    <div class="username"> <!-- Remove align="right" and add margin-bottom -->
        <h2>Hello, <?php echo $username; ?></h2>
    </div>
    </centre>
    <div class="contents" align="left">
        <h1><a href="transactionHistory.php">1. Transaction History</a></h1>
        <h1><a href="topUp.php">2. TopUp</a></h1>
        <h1><a href="withdraw.php">3. Withdraw</a></h1>
        <h1><a href="FaQ.php">4. FaQ</a></h1>
        <h1><a href="aboutUs.html">5. About our website</a></h1>
    </div>
    <br>

    <button><a href="../controller/logout.php">Logout</a></button>
   
</body>

</html>
