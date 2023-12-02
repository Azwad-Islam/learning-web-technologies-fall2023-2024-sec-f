<?php

    require_once("../model/userModel.php");

    function addEmployee($user){
        $con = getConnection();
        $sql = "insert into employee (name, ContactNum, username, password) values('{$user['name']}', '{$user['ContactNum']}', '{$user['username']}', '{$user['password']}')";
        $result = mysqli_query($con, $sql);
        return $result;
    }
    

    function getAllemployee(){
        $con = getConnection();
        $sql = "select * from employee";
        $result = mysqli_query($con, $sql);
        $employees = [];
        
        while($user = mysqli_fetch_assoc($result)){
            array_push($employees);
        }
        
        return $employees;
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

    function deleteEmployee($username){
        $con = getConnection();
        $sql = "delete from employee where username = '{$username}'";
        $result = mysqli_query($con, $sql);

        if ($result) {
            header('location: ../view/adminHome.php');
        } else {
            return "error";
        }
    }

?>