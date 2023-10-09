<?php
print "<h1><Strong>Handler Page</strong></h1> <br><br>";

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    echo "<strong>Your Name: </strong>" .$name;
}
?>
