<html>

<head>
    <title>LabTask 3</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Degree</legend>
            <input type="checkbox" name="degree" <?php if (isset($_POST['degree']) && $_POST['degree']=="SSC") echo "checked";?> value="SSC" /> SSC
            <input type="checkbox" name="degree" <?php if (isset($_POST['degree']) && $_POST['degree']=="HSC") echo "checked";?> value="HSC" /> HSC
            <input type="checkbox" name="degree" <?php if (isset($_POST['degree']) && $_POST['degree']=="BSc") echo "checked";?> value="BSc" /> BSc
            <input type="checkbox" name="degree" <?php if (isset($_POST['degree']) && $_POST['degree']=="MSc") echo "checked";?> value="MSc" /> Msc
            <hr>
            <input type="submit" name="submit" value="Submit" />
        </fieldset>
    </form>
</body>

</html>
