<html>

<head>
    <title>Labtask 3.1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend><strong>Name</strong></legend>
            <input type="text" name="name" value="<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo $name;
}
?>" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>

