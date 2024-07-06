<?php
    include 'mysql_connect.php';

    if(isset($_GET['customerId'])){
        $nic=$_GET['customerId'];
        $query="DELETE FROM customer WHERE nic= $nic";
        $result=mysqli_query($con,$query);
        if($result){
            header("location:customer_list.php");
        }else{
            die(mysqli_error($con));
        }
    }
?>
