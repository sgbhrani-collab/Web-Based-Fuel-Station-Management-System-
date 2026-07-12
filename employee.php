<?php

include 'db_connect.php';

$name = $_POST['name'];
$id = $_POST['empid'];
$position = $_POST['position'];
$salary = $_POST['salary'];

$sql = "INSERT INTO employees(employee_id,name,position,salary)
VALUES('$id','$name','$position','$salary')";

if($conn->query($sql))
{
    echo "Employee Added Successfully";
}
else
{
    echo "Error";
}

$conn->close();

?>
