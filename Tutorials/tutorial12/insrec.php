<?php
    include('dbconnect.php');
    $name=isset($_POST['name'])?$_POST['name']:"";
    $desc=isset($_POST['desc'])?$_POST['desc']:"";
    $query="insert into tbl_machine(machine_name,description) values('$name','$desc')";
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
    header('location:index.php');
?>