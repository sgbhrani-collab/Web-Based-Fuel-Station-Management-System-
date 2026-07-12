<?php

include 'db_connect.php';

$fuel = $_POST['fuel'];
$stock = $_POST['stock'];
$price = $_POST['price'];

$sql = "INSERT INTO fuel(fuel_type,stock,price)
VALUES('$fuel','$stock','$price')";

if($conn->query($sql))
{
    echo "Fuel Details Saved Successfully";
}
else
{
    echo "Error";
}

$conn->close();

?>
