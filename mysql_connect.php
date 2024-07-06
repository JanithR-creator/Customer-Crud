<?php
$con = new mysqli('localhost',
    'root', '1234', 'customer_crud'); //create a object

if (!$con) {
    die(mysqli_error($con));//distro karanna kiyala
}
?>