<?php
include_once("../controller/loginCheck.php")

?>


<center>
	<form action="../controller/logincheck.php" method="POST" enctype="">
		<table border=" 0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend>
							<h3>LOGIN</h3>
						</legend>
						User Id<br />
						<input type="text" name="username" value="<?php echo $username ?>" /><br />
						Password<br />
						<input type="password" name="password" value="<?php echo $password ?>" />
						<br />
						<hr />
						<input type="submit" value="Login" name="submit">
						<a href="registration.php">Register</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>