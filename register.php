<?php

include 'db_connect.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$sql = "INSERT INTO users(name,email,phone,password)
VALUES('$name','$email','$phone','$password')";

if($conn->query($sql)==TRUE)
{
    echo "Registration Successful";
}
else
{
    echo "Error : ".$conn->error;
}

$conn->close();

?>
