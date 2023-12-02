<?php

    require_once('db.php');
    function login($username, $pass){
        $con = getConnection();
        $sql = "select * from login where username='{$username}' and password='{$pass}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        $user = mysqli_fetch_array($result);
        
        if($count == 1){
            session_start();
            $_SESSION['user'] = ['username' => $user['username'], 'password' => $user['password']];
            return true;
        }else{
            return false;
        }
    }

    function register($username) 
    {
        $con = getConnection();
        $sql = "select * from employee where username='{$username}'";
        $result = mysqli_query($con, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 1) {
            return "Username is already taken";
        }
        $result = addEmployee($username);

        if ($result) {
            header('location: ../view/login.php');
        } else {
            return "Database error!";
        }
    }
    function addEmployee($user){
        $con = getConnection();
        $sql = "insert into employee (name, ContactNum, username, password) values('{$user['name']}', '{$user['ContactNum']}', '{$user['username']}', '{$user['password']}')";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    
?>