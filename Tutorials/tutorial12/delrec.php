<?php 
    include('dbconnect.php');
    $id=$_GET['id'];
    $query="delete from tbl_machine where id=".$id;
    if ($conn->query($query) === TRUE) {
        echo "delete successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
    header('location:index.php');
?>