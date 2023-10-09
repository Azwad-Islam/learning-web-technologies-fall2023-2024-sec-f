<?php
print "<h1><Strong>Handler Page</strong></h1> <br><br>";

if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    echo "<strong>Your Email: </strong>".$email;
}
?>