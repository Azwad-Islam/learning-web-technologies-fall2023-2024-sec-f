<html>

<head>
    <title>LabTask 3.1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend><strong>Gender</strong></legend>
            <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender']=="Male") echo "checked";?> value="Male" />Male
            <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender']=="Female") echo "checked";?>value="Female" />Female
            <input type="radio" name="gender" <?php if (isset($_POST['gender']) && $_POST['gender']=="Others") echo "checked";?> value="Others" /> Others
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>

<?php
