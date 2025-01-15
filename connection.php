<?php     
    $con = mysqli_connect("localhost", "root", "", "testing");  
    if(mysqli_connect_error()) {  
        die("Failed to connect with MySQL: ". mysqli_connect_error());  
    }  
?>