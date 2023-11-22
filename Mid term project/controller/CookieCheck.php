<?php 
    require_once('../model/userModel.php');
   $user = getUser($_SESSION['username']); 
   $username = $user['UserName'];
    $password = $user['Password'];

    
    if ($username == $_SESSION['user']['username'] && $password == $_SESSION['user']['password']){
    
        setcookie('flag', 'true', time()+300, '/');
       // return true;
    }else{
        echo "invalid user!";
    }
?>