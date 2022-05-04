<?php
session_start();
if(isset($_POST['btnSubmit']))
{
    $email=$_POST['username'];
    $pass=$_POST['password'];
   
    if($email == "" and $pass == "")
    {
        if(isset($_POST['remember']))
        {
            setcookie('username',$email,time()+60*60*7);
            setcookie('password',$pass,time()+60*60*7);
            
        }
         $_SESSION['username']=$email;
        header("location:index.php");
       
       

    }
    else{
        echo "invalid";
    }

}
else
{
    header("location:login.php");
}
?>

    