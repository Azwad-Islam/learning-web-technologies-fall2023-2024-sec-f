<?php
include_once("../controller/sessionCheck.php");
?>
<center>
	<form method="POST" action="../controller/changePasswordCheck.php" enctype="">
		<table border="0" cellspacing="0" cellpadding="5">
			<tr>
				<td>
					<fieldset>
						<legend>CHANGE PASSWORD</legend>
						Current Password<br />
						<input type="password" name="Current"/><br />
						New Password<br />
						<input type="password" name="new"/><br />
						Retype New Password<br />
						<input type="password" name="Confirm"/>								
						<hr />
                        <input type="submit" value="Change" name="submit">
                        <a href="
                        <?php 
		                if($user['User Type'] == 'admin'){
			                echo 'admin_home.php';
			                }
			            else{
				        echo 'user_home.php';
			                }
			            ?>"
                            >Go Home</a></td></tr>					
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>