<?php

    $symbol = array ('-','_','.',);
    
   
    
    $alphabet = array_merge(range('a', 'z'), range('A', 'Z'), $symbol);
    global $count;
   

if (isset($_POST['submit'])) {
    $UserName = $_POST['UserName'];
    $pass = $_POST['password'];
    
    
    foreach(str_split($UserName) as $char)
    {
        if(!in_array($char, $alphabet))
        {
            $count++;
             
        }    
    }
    

    if ($count > 0 ) {
        echo"Invaild Username ";
    }
    elseif(strlen($UserName) <2){
        echo "Username too short";
    }
    elseif (strlen($pass)<8) {
        echo"password too short";
    }
    elseif (!str_contains($pass, '@') && !str_contains($pass, '#') && !str_contains($pass, '$') && !str_contains($pass, '%')) {
        
        echo"password must contain at least one of the following @, #, $, %";
    }
    else {
        echo"login successfull";
    }
    
}
    
?>