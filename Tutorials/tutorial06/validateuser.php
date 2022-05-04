<?php

    session_start();

    $e = (isset($_POST['username'])? trim($_POST['username']) : '');
    $p = (isset($_POST['password'])? trim($_POST['password']) : '');
    
    if ($e == '' && $p == '') {
        
        $_SESSION['username'] = $e;

        header('location:index.php');

    }
    else{
        echo '<script>alert("Please enter valid data!!");</script>';

        echo '<script type="text/javascript">';
        echo 'window.location.href="login.php";';
        echo '</script>';
    }

?>