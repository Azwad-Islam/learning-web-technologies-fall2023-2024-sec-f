<html>

<head>
    <title>LabTask 3.1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend><strong>E-mail</strong></legend>
            <input type="email" name="email" value="
<?php

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    echo $email;
}
?>" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>
