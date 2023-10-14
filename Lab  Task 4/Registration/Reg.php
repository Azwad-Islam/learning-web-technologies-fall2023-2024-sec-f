<?php
$name = $_REQUEST['name'];
$email = $_REQUEST['email'];
$UserName = $_REQUEST['UserName'];
$password = $_REQUEST['pass'];
$ConPass = $_REQUEST['ConfirmPass'];
$gender = $_REQUEST['gender'];
$day = $_REQUEST['dd'];
$month = $_REQUEST['mm'];
$year = $_REQUEST['yyyy'];


$symbol = array ('-','_','.',);
    
   
    
$alphabet = array_merge(range('a', 'z'), range('A', 'Z'), $symbol);
$alphabet2 = array_merge(range('a', 'z'), range('A', 'Z'));
global $count;
global $count2;
    
    foreach(str_split($UserName) as $char)
    {
        if(!in_array($char, $alphabet))
        {
            $count++;
             
        }    
    }
    foreach(str_split($name) as $char2)
    {
        if(!in_array($char2, $alphabet2))
        {
            $count2++;
             
        }    
    }
    if ($count > 0 ) {
        echo"Invaild Username ";
    }
    elseif (!str_contains($email, "@") && !str_contains($email, ".com")) {
        echo "invalid email!";
    } 
    else if (strlen($UserName) < 2) {
        echo "Username too Short!";
    }    
    elseif ($count2 > 0 ) {
        echo"Invaild name ";
    }
    elseif (strlen($password) < 8) {
        echo "Password too short!";
        } 
    elseif (!str_contains($password, '@') && !str_contains($password, '#') && !str_contains($password, '$') && !str_contains($password, '%')) {
        echo "Password must contain at least one of the following @, #, $, %";
        } 
   
    elseif ($password != $ConPass) {
            echo "password does not match with the Confirm password!";
            }
   
    elseif ($name == '') {
                    echo "Name not valid!";
                } 
 
    elseif ($gender == '') {
                        echo "Invalid Gender!";
                    } 
  
    elseif ($day == ' ' || $month == '' || $year == '') {
                            echo "Invalid Date of Birth";
                        }
    else {
        echo"Signup complete";
    }
  
?>