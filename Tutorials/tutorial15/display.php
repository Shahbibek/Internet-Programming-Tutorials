<?php
include 'connect.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fetch data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
   
        <button class='btn btn-primary my-5'><a href="index.php" class="text-light">Add User</a></button>
        
        <button class='btn btn-primary my-5'><a href="logout.php" class="text-light ">Logout</a></button>
    </div>    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Fullname</th>
      <th scope="col">Firstname</th>
      <th scope="col">Lastname</th>
      <th scope="col">Email</th>
      <th scope="col">Password</th>
      <th scope="col">Contact</th>
      <th scope="col">Birthday</th>
      <th scope="col">Gender</th>
      <th scope="col">Passno</th>
      <th scope="col">Registerby</th>
      <th scope="col">Status</th>
      <th scope="col">Photo</th>
      <th scope="col">Operation</th>
    </tr>
  </thead>
  <tbody>
<?php
    $sql = "Select *from `members`";
    $result=mysqli_query($con,$sql);
    if($result){
       while( $row=mysqli_fetch_assoc($result)){
           $id =$row['id'];
           $fullname =$row['fullname'];
           $firstname =$row['firstname'];
           $lastname =$row['lastname'];
           $email =$row['email'];
           $password =$row['password'];
           $contact =$row['contact'];
           $birthday =$row['birthday'];
           $gender =$row['gender'];
           $passno =$row['passno'];
           $registerby =$row['registerby'];
           $status =$row['status'];
           $photo =$row['photo'];
           echo '<tr>
           <th scope="row">'.$id.'</th>
           <td>'.$fullname.'</td>
           <td>'.$firstname.'</td>
           <td>'.$lastname.'</td>
           <td>'.$email.'</td>
           <td>'.$password.'</td>
           <td>'.$contact.'</td>
           <td>'.$birthday.'</td>
           <td>'.$gender.'</td>
           <td>'.$passno.'</td>
           <td>'.$registerby.'</td>
           <td>'.$status.'</td>
           <td>'.$photo.'</td>
           <td>
           <button class="btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Edit </a></button>
           <button class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button></td>
         </tr>';
      
       }
    }

?>
    
  </tbody>
</table>




</body>
</html>