<html>

<head>
    <title>LabTask 3.1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Date of Birth</legend>
            <input type="date" name="dob  " value="<?php

if (isset($_POST['submit']))
 {
    $dob = $_POST['dob'];
    echo $dob;
}
?>" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>

