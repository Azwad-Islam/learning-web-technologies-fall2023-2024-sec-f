<html>

<head>
    <title>Registration</title>
    <script src="../asset/ValidateRegistration.js"></script>
</head>
<body>
<center>
	<form method="POST" action="../controller/registrationCheck.php" enctype="">
		<table border="0" cellspacing="0" cellpadding="0">
			<tr>
				<td>
					<fieldset>
						<legend>
							<h3>REGISTRATION</h3>
						</legend>
						Name<br /><input type="text" id="name" name="name"><br />
                        Contact Number<br /><input type="text" id="ContactNum" name="ContactNum"><br />
						User Name<br /><input type="text"id="UserName" name="name"><br />
                        Password<br /><input type="password" id="pass" name="password"><br />
						
						<input  type="button" name="submit" value="Register" onclick="Registrationvalidation()"/>
						<a href="login.php">Sign In</a>
					</fieldset>
				</td>
			</tr>
		</table>
	</form>
   
</center>
</body>
</html>