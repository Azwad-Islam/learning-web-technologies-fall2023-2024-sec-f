<html>

<head>
    <title>LabTask 3.1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend><strong>E-mail</strong></legend>
            <input type="email" name="email" value="" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    echo "<strong>Your Email: </strong>".$email;
}
?>