<html>

<head>
    <title>LabTask 3.1</title>
</head>

<body>
    <form method="post" >
        <fieldset>
            <legend>Blood Group</legend>
            <select name="bg">
            <option value="A+" <?php if(isset($_POST['bg']) && $_POST['bg'] == "A+") echo "selected"; ?>>A+</option>
            <option value="A-" <?php if(isset($_POST['bg']) && $_POST['bg'] == "A-") echo "selected"; ?>>A-</option>
            <option value="B+" <?php if(isset($_POST['bg']) && $_POST['bg'] == "B+") echo "selected"; ?>>B+</option>
            <option value="B-" <?php if(isset($_POST['bg']) && $_POST['bg'] == "B-") echo "selected"; ?>>B-</option>
            <option value="O+" <?php if(isset($_POST['bg']) && $_POST['bg'] == "O+") echo "selected"; ?>>O+</option>
            <option value="O-" <?php if(isset($_POST['bg']) && $_POST['bg'] == "O-") echo "selected"; ?>>O-</option>
            <option value="AB+" <?php if(isset($_POST['bg']) && $_POST['bg'] == "AB+") echo "selected"; ?>>AB+</option>
            <option value="AB-" <?php if(isset($_POST['bg']) && $_POST['bg'] == "AB-") echo "selected"; ?>>AB-</option>
            </select>
                <hr>
                <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>

    
</body>

</html>
