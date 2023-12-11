<?php
    require_once('db.php');

    function login($username, $password)
    {
        $con = getConnection();
        $sql = "select * from user where username='{$username}' and password='{$password}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        $user = mysqli_fetch_array($result);
        if ($count == 1) {
            session_start();
            $_SESSION['username'] = $row['username'];
            $_SESSION['password'] = $row['password'];
            $_SESSION['flag'] = "true";
            return true;
            
        } else {
            return false;
        }
    }

    function getUser($username)
    {
        $con = getConnection();
        $sql = "select `usertype` FROM `users` WHERE username = '{$username}'";
        $result = mysqli_query($con, $sql);
        $usertype = mysqli_fetch_assoc($result);
        return $usertype;
    
    }
    function getUserInfo($username)
    {
        $con = getConnection();
        $sql = "select `username`,`product` FROM `users` WHERE username = '{$username}'";
        $result = mysqli_query($con, $sql);
        $userinfo = mysqli_fetch_assoc($result);
        return $userinfo;
    
    }
    function registration($username, $password,$usertype)
    {
        if(getUser($username)){
            return false;
        }else{
        $con = getConnection();
        $sql = "INSERT INTO `user`(`username`, `password`, `usertype`, `status`, `product`) VALUES ('{username}','{password}','{usertype}','true'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $row = mysqli_fetch_assoc($result);
        $user = mysqli_fetch_array($result);
        return true;    
        
        }
    }

?>