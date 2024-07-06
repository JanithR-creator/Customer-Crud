<?php
    include 'header.php';
    include 'mysql_connect.php'; //connect this file

    if(isset($_POST['submit'])){
        $nic=$_POST['nic'];
        $name=$_POST['name'];
        $address=$_POST['address'];
        $salary=$_POST['salary'];

        $sql="INSERT INTO `customer` (nic,name,address,salary)
            VALUES('$nic','$name','$address','$salary')";//normal my sql query as variable

        $result=mysqli_query($con,$sql);//pass the data to mysqli_query function

        if($result){
            echo "Customer was Saved!";
        }
    }
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>Customer</title>
</head>
<body>
<form method="post">
    <div class="container">
        <br>
        <h4>Customer Form</h4>
        <hr>
        <div class="row">
            <div class="col-3">
                <div class="form-group">
                    <label for="nic">NIC</label>
                    <input type="text" name="nic" id="nic" class="form-control" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" class="form-control" required>
                </div>
            </div>
            <div class="col-3">
                <div class="form-group">
                    <label for="salary">Salary</label>
                    <input type="number" name="salary" id="salary" class="form-control" required>
                </div>
            </div>
            <div class="col-12">
                <br>
                <input type="submit" name="submit" class="btn btn-primary col-12" value="Save Customer"/>
            </div>
        </div>
    </div>
</form>
</body>
</html>