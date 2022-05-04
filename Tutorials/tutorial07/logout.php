<?php
   session_start();
   session_destroy();
   if(isset($_COOKIE['username']) and isset($_COOKIE['password']))
   {
      $email=$_COOKIE['username'];
      $pass=$_COOKIE['password'];
   
      setcookie('username',$email,time()-1);
      setcookie('password',$pass,time()-1);
   }
   header('location:login.php');
   echo 'You have cleaned session';
?>
