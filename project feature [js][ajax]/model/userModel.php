<?php

    require_once('db.php');

    function login($username, $password)
    {
        $con = getConnection();
        $sql = "select * from users where UserName='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        $user = mysqli_fetch_array($result);
        if ($count == 1) {
            session_start();
            $_SESSION['username'] = $row['UserName'];
            $_SESSION['password'] = $row['Password'];
            $_SESSION['flag'] = "true";
            return true;
            
        } else {
            return false;
        }
    }
    
    

    function getUser($username)
    {
        $con = getConnection();
        $sql = "select `UserName`, `Password` FROM `users` WHERE UserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        $user = mysqli_fetch_assoc($result);
        return $user;
    
    }
    function ShowBalance($username){
        $con = getConnection();
        $sql = "select `Balance` FROM `users` WHERE UserName = '{$username}'";
        $result = mysqli_query($con, $sql);
        $balance = mysqli_fetch_assoc($result);
        return $balance;
    }

    function addMoney($username,$amount){
        //date_default_timezone_set('Asia/Dhaka'); 
    
        //$date = date('d-m-Y');
        $con = getConnection();
       // mysqli_query($con,"UPDATE `users` SET `date_time`='{$date}' WHERE UserName='Azwad1'");
        $sql = "update `users` set `Balance`= Balance + '{$amount}',`TransactionType` ='TopUp' WHERE UserName = '{$username}'";
        $sql2="INSERT INTO `transactionhistory`(`UserId`, `Type`, `Amount`) VALUES ('{$username}', 'TopUp','{$amount}') ";
        $result = mysqli_query($con, $sql);
        $result2 = mysqli_query($con,$sql2);
       
        if ($result==true) {
            echo"successfull";
            return true;
           
        } else {
            return false;
        }
    }
        
    function withdraw($username,$amount){
        $con = getConnection();
        $sql="UPDATE users SET Balance=Balance-'{$amount}' WHERE Username='$username'";
        $sql2="INSERT INTO `transactionhistory`(`UserId`, `Type`, `Amount`) VALUES ('{$username}', 'Withdrawn','{$amount}') ";
        $result = mysqli_query($con, $sql);
        $result2 = mysqli_query($con,$sql2);
       
        if ($result==true) {
            echo"successfully withdrawn";
            return true;
           
        } else {
            return false;
        }
    }

    function Transaction($username){
        $con = getConnection();
        $sql = "SELECT * FROM `transactionhistory` WHERE UserId = '{$username}';";
        $result = mysqli_query($con, $sql);
        $transArray = [];
        while($trans = mysqli_fetch_assoc($result)){
            array_push($transArray, $trans);
        }
        return $transArray;
        
    }


?>