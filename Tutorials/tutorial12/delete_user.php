<?php
    session_start();
    include "connect.php";
    $id=isset($_GET['id'])?$_GET['id']:0;
    
    $sql="update tbl_machine set is_delete=1 where id=$id";
    $db->query($sql);
    if($db->affected_rows)
    {
        $_SESSION['message']="Operation Successful";
    }
    header("location:index.php");
?>