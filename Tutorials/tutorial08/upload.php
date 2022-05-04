<?php
error_reporting(0);
?>
<?php
$msg = "";
session_start();
// If upload button is clicked ...
if (isset($_POST['upload'])) {

    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];
    $folder = "image/" . $filename;

    $db = mysqli_connect("localhost", "root", "", "tutorial8");

    // Get all the submitted data from the form
    $sql = "INSERT INTO image (filename) VALUES ('$filename')";

    // Execute query
    mysqli_query($db, $sql);

    // Now let's move the uploaded image into the folder: image
    if (move_uploaded_file($tempname, $folder)) {
        //echo "Image uploaded successfully";
        //$_SESSION['user'] = 20;
        if (!isset($_SESSION['user'])) {
            $_SESSION['user'] = "Uploaded";
            header("location:index.php");
        }
    } else {
        $msg = "Failed to upload image";
        if (!isset($_SESSION['logout'])) {
            $_SESSION['logout'] = "Your image has not been uploaded.";
            header("location:index.php");
        }
    }

}
$result = mysqli_query($db, "SELECT * FROM image");
?>
