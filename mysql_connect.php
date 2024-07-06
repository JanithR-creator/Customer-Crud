<?php
$con = new mysqli('localhost',
    'root', '1234', 'customer_crud');

if ($con) {
    echo 'Connected';
} else {
    die(mysqli_error($con));//distro karanna kiyala
}
?>