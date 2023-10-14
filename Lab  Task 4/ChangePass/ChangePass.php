<?php
if (isset($_REQUEST['submit'])){
    $CurrentPass = $_POST['CurrentPass'];
    $NewPass = $_REQUEST['NewPass'];
    $RetypeNewPass = $_REQUEST['RetypeNewPass'];



if ($CurrentPass == $NewPass) {
    echo "New password same as the old password!";
} else if ($NewPass != $RetypeNewPass) {
    echo "Retyped password does not match with the new password!";
} else {
    echo "Password changed successfully!";
}
}

?>