<?php
include_once("../controller/sessionCheck.php");
require_once('../model/userModel.php');

$user = getUser($_SESSION['userId']); 

?>
<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="2" align="CENTER">Profile</td></tr>
		<tr><td>ID</td><td><?php echo $user['ID']?></tr>
		<tr><td>NAME</td><td><?php echo $user['Name']?></td></tr>	
		<tr><td>USER TYPE</td><td><?php echo $user['User Type']?></td></tr>
		<tr><td colspan="2" align="right"><a href="
		<?php 
		if($user['User Type'] == 'admin'){
			echo 'admin_home.php';
			}
			else{
				echo 'user_home.php';
			}
			?>"
            >Go Home</a></td></tr>
	</table>			
</center>