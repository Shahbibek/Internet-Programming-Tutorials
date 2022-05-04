<?php

session_start();
$message = isset($_SESSION['user']) ? $_SESSION['user'] : "";
unset($_SESSION['user']);
$logout = isset($_SESSION['logout']) ? $_SESSION['logout'] : "";
unset($_SESSION['logout']);

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign up</title>
  <link rel="stylesheet" href="./style1.css">
  

</head>
<body>
<!-- partial:index.partial.html -->
<!DOCTYPE html>
<html>
<head>
	<title>Slide Navbar</title>
	<link rel="stylesheet" type="text/css" href="slide navbar style.css">
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
</head>
<body>
<h3 class="text-success text-center mb-5" style="margin-top: -20px;"><?= $message?></h3>
    <h3 class="text-danger text-center mb-5"><?= $logout?></h3>
    
	<div class="main">  

		<input type="checkbox" id="chk" aria-hidden="true">

			<div class="signup">
				<form action="upload.php" method="post" enctype="multipart/form-data" class="signin-form">
					<label for="chk" aria-hidden="true">Sign Up</label>
					<input type="email" name="email" placeholder="Email" required>
					<input type="password" name="pswd" placeholder="Password" required>
					<input type="password" name="repswd" placeholder="Repeat Password"required >
					<input type="text" name="age" placeholder="Age"required>
					<input type="date" name="bdate" placeholder="Birth Date" required>
					<input type="text" name="country" placeholder="Country" required>
					<input type="text" name="state" placeholder="State" required>
					<input type="text" name="city" placeholder="City" required>
					<h1><center>Add Profile photo</center>
					<input type="file" name="uploadfile" required="">
					<button value="Upload Image" name="upload">Sign Up</button>
					<a href="login.html" ><center><h3>SignIn</h3><center></a></h1>
				</form>
			</div>


</div>
</body>
</html>
<!-- partial -->

  
</body>
</html>
