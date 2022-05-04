<?php
 $conn = new mysqli("localhost", "root", "", "tutorial14");
 if ($conn->connect_error) 
 {
     die("Connection failed: " . $conn->connect_error);
}
//echo "Connected successfully";        
?>