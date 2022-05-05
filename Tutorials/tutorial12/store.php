<?php
    session_start();
    include("connect.php");
    $id=isset($_POST['id'])?$_POST['id']:0;
    $machine_name=isset($_POST['machine_name'])?$_POST['machine_name']:"";
    $description=isset($_POST['description'])?$_POST['description']:"";
    
    $sql="";
    if($id)
    {
        $sql="update tbl_machine set machine_name='$machine_name',description='$description' where id=$id";
    }
    else
    {
        $sql="insert into tbl_machine (machine_name,description) values('$machine_name','$description')";
    }
    $db->query($sql);
    if($db->affected_rows)
    {
        $_SESSION['message']="Operation Successful";
    }
    else
    {
        $_SESSION['message']="Operation failed";
    }
    header("location:index.php");
?>