<center>
	<form method="POST" action="../controller/registrationCheck.php" enctype="">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend>
							<h3>REGISTRATION</h3>
						</legend>
						Id<br /><input type="text" name="id"><br />
						Password<br /><input type="password" name="password"><br />
						Confirm Password<br /><input type="password" name="confirmPassword"><br />
						Name<br /><input type="text" name="name"><br />
						User Type
						<hr />
						<input type="radio" name="type" value="user" id="radio1" checked="checked" /><label for="radio1">User</label>
						<input type="radio" name="type" value="admin" id="radio2" checked="checked" /><label for="radio2">admin</label>
						<hr />
						<input type="submit" name="submit"value="Sign Up">
						<a href="login.php">Sign In</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
</center>