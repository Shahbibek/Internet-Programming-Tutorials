<?php
	session_start();
	include("connect.php");
	$username= $_POST['username'];
	$password= $_POST['password'];
	$rememberme = isset($_POST["rememberme"])?$_POST["rememberme"]:"";
		
	$sql = "select * from users where username='$username' and password='$password'";
	$result = $db->query($sql);
	if($result->num_rows > 0){
		
		$row = $result->fetch_assoc();
		$username = $row['username'];
		$category = $row['category'];
		$first_name = $row['fname'];
		
		$_SESSION["username"] = $username;
		$_SESSION["first_name"] = $first_name;
		$_SESSION["category"] = $category;
			
		//Cookie Code goes here
		if(isset($_COOKIE['logincount'])){
			setcookie('logincount',$_COOKIE['logincount']+1,time()+(60*60*24*30));
		}else{
			setcookie('logincount',1,time()+(60*60*24*30));
		}
		
		header("location:index.php");
	}else{
		header("location:login.php");
	}
	
?>