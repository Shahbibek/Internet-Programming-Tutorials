<?php
	session_start();
	session_destroy();
	header("location:user.php");
?>

<?php
require "db/connect.php";
session_start();
if(!isset($_SESSION["username"]) && $_SESSION["username"]==null){
	header("location:login.php");
}
$username= $_SESSION["username"];