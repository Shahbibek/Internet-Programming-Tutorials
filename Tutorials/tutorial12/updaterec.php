<?php
    include('dbconnect.php');
    session_start();
    $name=isset($_POST['name'])?$_POST['name']:"";
    $desc=isset($_POST['desc'])?$_POST['desc']:"";
    $query="UPDATE tbl_machine SET machine_name='$name', description='$desc' WHERE id=".$_SESSION['id'];
    if ($conn->query($query) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }

    unset($_SESSION['id']);
    session_abort();
    header('location:index.php');
?>