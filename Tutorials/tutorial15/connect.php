<?php

// $con = new mysqli('localhost','root','','phpcrud');
// if($con){
//     echo "Connection successful";
// }else{
//     die (mysqli_error($con));
// }

$con = new mysqli ('localhost','root','','tutorial15');
if(!$con){
    die(mysqli_error($con));
}


?>