<?php
require_once ('db.php');

    $username = $_POST['EmpName'];
    $result = search($username);
 
    if($result){
        while($row = mysqli_fetch_assoc($result)){
            echo "Employer Name: ".$row['Employer Name']."<br>";
            echo "Company Name: ".$row['Company Name']."<br>";
            echo "Contact No: ".$row['Contact No']."<br>";
            
        }
    }
     
    else {
        echo "No user found";
    }
  
  

?>