<?php

include 'db_connect.php';

$sql = "SELECT * FROM billing";

$result = $conn->query($sql);

while($row = $result->fetch_assoc())
{
    echo "Customer : ".$row['customer_name']."<br>";
    echo "Fuel : ".$row['fuel_type']."<br>";
    echo "Quantity : ".$row['quantity']." Litres<br>";
    echo "Amount : ₹".$row['amount']."<br><hr>";
}

$conn->close();

?>
