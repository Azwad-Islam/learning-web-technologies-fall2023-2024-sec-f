<html>
<head>
    <title>Lab 4 task1</title>
</head>

<body>
    <form method="post">
        <fieldset>
            <legend>Login</legend>
            User Name : <input type="text" name="UserName" value="" />
            Password : <input type="password" name="password" value="" />
            <hr>
            <input type="submit" name="submit" value="Submit" />
            <input type="checkbox" name="remember me" value=""> Remember Me<br>
          
            <a href="">Forgot Password?</a>
        
        </fieldset>
    </form>
</body>
</html>

<?php

    $symbol = array ('-','_','.',);
    
    $PassSymbol = array('@', '#', '$', '%');
    
    $alphabet = array_merge(range('a', 'z'), range('A', 'Z'), $symbol);
    global $count;
    global $count2;

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
    
    foreach(str_split($pass) as $char2)
    {
        if(!in_array($char2, $PassSymbol))
        {
            $count2++;
             
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