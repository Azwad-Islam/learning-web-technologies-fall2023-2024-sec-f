<!DOCTYPE html>
<html lang="en">
<head>
    <title>Login</title>
    <script src="../Asset/loginCheck.js"></script>
</head>
<body>
    <center>
        <form action="#" method="POST" enctype="">
            <table border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td>
                        <fieldset>
                            <legend>
                                <h3>LOGIN</h3>
                            </legend>
                            User Id<br />
                            <input type="text" name="id" id="id" value="" /><br />
                            Password<br />
                            <input type="password" name="password" id="password" value="" />
                            <br />
                            <hr />
                            <button type="button" onclick="loginValidation()" class="button">Submit</button>
                            <a href="registration.php">Register</a>
                        </fieldset>
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
