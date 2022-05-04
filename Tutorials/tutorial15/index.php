<?php
include 'connect.php';
if(isset($_POST['submit'])){
    $fullname=$_POST['fullname'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $contact=$_POST['contact'];
    $birthday=$_POST['birthday'];
    $gender=$_POST['gender'];
    $passno=$_POST['passno'];
    $registerby=$_POST['registerby'];
    $status=$_POST['status'];
    $photo=$_POST['photo'];

    $sql = "insert into `members` (fullname,firstname,lastname,email,password,contact,birthday,gender,passno,registerby,status,photo) values('$fullname','$firstname','$lastname','$email','$password','$contact','$birthday','$gender','$passno','$registerby','$status','$photo')";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Data inserted successfully";
        header('location:user.php');
    }else{
        die (mysqli_error($con));
    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
   <center><h1>Form</h1></center> 
   
   <div class="col-lg-3">
   <center><button class='btn btn-primary my-5'><a href="user.php" class="text-light">Login</a></button></center>
</div>
    <div class="container mt-3">
        <form action="" method="post">
            <div class="form-group mt-3">
                <input type="text" class="form-control" class="form-control"class="form-control" name='fullname' id='fullname' placeholder="Enter fullname">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control"name='firstname' id='firstname' placeholder="Enter firstname">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control"name='lastname' id='lastname' placeholder="Enter lastname">
              </div>

              <div class="form-group mt-3">
                <input type="email"class="form-control" name='email' id='email' placeholder="Enter email">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control"name='password' id='password' placeholder="Enter Password">
              </div>

              <div class="form-group mt-3">
                <input type="number" class="form-control"name='contact' id='contact' placeholder="Enter contact">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" name='birthday' id='birthday' placeholder="Enter birthday">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control"name='gender' id='gender' placeholder="Enter gender">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control"name='passno' id='passno' placeholder="Enterpassno">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control"name='registerby' id='registerby' placeholder="Enter registerby">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control"name='status' id='status' placeholder="Enter status">
              </div>

              
              <div class="form-group mt-3">
              <input type="file"class="form-control" id="photo" name="photo" accept="image/*"><br>
              </div>
              <button type="submit" class="btn btn-warning" name='submit'>Submit</button>
             
        </form>
    </div>

</body>
</html>