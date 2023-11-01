<?php
include_once("../controller/sessionCheck.php");
require_once('../model/userModel.php');

$user = getUser($_SESSION['userId']); 
?>
<center>
    <h3><font color="#76923c"> <strong> Admin's Home page </strong></font> <h3>
	<h1>Welcome <?php echo $user['Name'];?>!</h1>
	<a href="profile.php">Profile</a>
	<br/>
	<a href="change_password.php">Change Password</a>
	<br/>
	<a href="view_users.php">View Users</a>
	<br/>
	<a href="login.php">Logout</a>
</center>