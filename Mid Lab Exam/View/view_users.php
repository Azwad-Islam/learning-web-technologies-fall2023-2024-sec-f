<?php

include_once("../controller/sessionCheck.php");
require_once('../model/userModel.php');

$users = getAllUser(); 

?>

<center>
	<table border="1" cellpadding="5" cellspacing="0">
		<tr><td colspan="4" align="CENTER">Users</td></tr>
		<tr>
			<td>ID</td><td>NAME</td><td>USER TYPE</td>
		</tr>
		<?php   for($i=0; $i<count($users); $i++){ ?>
            <tr>
                <td><?=$users[$i]['ID']?></td>
                <td><?=$users[$i]['Name']?></td>
                <td><?=$users[$i]['User Type']?></td>
            </tr>
        <?php } ?>    
		<tr>
			<td colspan="3" align="right">
				<a href="
				<?php 
					if($user['User Type'] == 'admin'){
						echo 'admin_home.php';
						}
						else{
							echo 'user_home.php';
						}
			?>">Go Home</a>
			</td>
		</tr>
	</table>			
</center>
