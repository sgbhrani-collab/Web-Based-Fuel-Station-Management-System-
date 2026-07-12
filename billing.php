<?php

include 'db_connect.php';

$customer = $_POST['customer'];
$fuel = $_POST['fuel'];
$quantity = $_POST['quantity'];
$amount = $_POST['amount'];

$sql = "INSERT INTO billing(customer_name,fuel_type,quantity,amount)
VALUES('$customer','$fuel','$quantity','$amount')";

if($conn->query($sql))
{
    echo "Bill Generated Successfully";
}
else
{
    echo "Error";
}

$conn->close();

?>
