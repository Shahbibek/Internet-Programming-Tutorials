<?php
$db = new mysqli('localhost', 'root', '', 'tutorial12');

if ($db->connect_errno) {
    echo $db->connect_error;
    echo ('Sorry, Database connection error.');
} else {
    $message = "You have connected SuccessFully.";
}
?>