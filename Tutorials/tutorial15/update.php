

<?php
include 'connect.php';
$id=$_GET['updateid'];
$sql = "Select *from `members` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$fullname=$row['fullname'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$email=$row['email'];
$password=$row['password'];
$contact=$row['contact'];
$birthday=$row['birthday'];
$gender=$row['gender'];
$passno=$row['passno'];
$registerby=$row['registerby'];
$status=$row['status'];
$photo=$row['photo'];

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

    $sql = "update `members` set id=$id,fullname='$name',firstname='$firstname',lastname='$lastname',email='$email',password='$password',
    contact='$contact',birthday='$birthday',gender='$gender',passno='$passno',registerby='$registerby',status='$status',photo='$photo' where id=$id";
    $result = mysqli_query($con,$sql);
    if($result){
        // echo "Data Updated successfully";
        header("location:display.php");
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
    <div class="container mt-3">
        <form action="" method="post">
            <div class="form-group mt-3">
                <input type="text" class="form-control" value=<?php echo $id;?> name='fullname' id='fullname' placeholder="Enter fullname">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" value=<?php echo $firstname;?> name='firstname' id='firstname' placeholder="Enter firstname">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" value=<?php echo $lastname;?> name='lastname' id='lastname' placeholder="Enter lastname">
              </div>

              <div class="form-group mt-3">
                <input type="email"class="form-control" value=<?php echo $email;?> name='email' id='email' placeholder="Enter email">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" value=<?php echo $password;?> name='password' id='password' placeholder="Enter Password">
              </div>

              <div class="form-group mt-3">
                <input type="number" class="form-control" value=<?php echo $contact;?> name='contact' id='contact' placeholder="Enter contact">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" value=<?php echo $birthday;?> name='birthday' id='birthday' placeholder="Enter birthday">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" value=<?php echo $gender;?> name='gender' id='gender' placeholder="Enter gender">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" value=<?php echo $passno;?> name='passno' id='passno' placeholder="Enterpassno">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" value=<?php echo $registerby;?> name='registerby' id='registerby' placeholder="Enter registerby">
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" value=<?php echo $status;?> name='status' id='status' placeholder="Enter status">
              </div>

              
              <div class="form-group mt-3">
              <input type="file"class="form-control" id="photo" value=<?php echo $photo;?> name="photo" accept="image/*"><br>
              </div>
              <button type="submit" class="btn btn-primary" name='submit'>Update</button>
             
        </form>
    </div>

</body>
</html>












