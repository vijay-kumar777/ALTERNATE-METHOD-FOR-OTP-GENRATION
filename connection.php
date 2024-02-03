<?php      
    $host = "localhost"; // Database host
    $username = "root"; // Database username
    $password = ""; // No password for root
    $dbName = "blog"; // Database name
      
    $con = mysqli_connect($host, $username, $password, $dbName);  
    if(mysqli_connect_errno()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>  