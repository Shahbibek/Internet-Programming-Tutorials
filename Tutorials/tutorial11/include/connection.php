<?php

    

    $conn = new mysqli("localhost", "root", "", "tutorial10");


    if ($conn->connect_error) 
    {
        echo("Connection failed: " . $conn->connect_error);
    }
    
            
?>