<?php
    include 'mysql_connect.php';
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
<form>
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
                <button type="submit" class="btn btn-primary col-12">Save Customer</button>
            </div>
        </div>
    </div>
</form>
</body>
</html>