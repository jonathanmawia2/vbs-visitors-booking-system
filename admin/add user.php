<?php
include ("includes/protect.php");

if (isset($_REQUEST['username']))
{
    $username = $_REQUEST["username"];
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
    $password =password_hash($password, PASSWORD_BCRYPT);
   

    $con = mysqli_connect("localhost", "root", "", "park") or die(mysqli_connect_error());

        $sql = "INSERT INTO `users`(`id`, `username`, `email`, `password`) VALUES ('null','$username','$email','$password')";
        $result = mysqli_query($con, $sql);
        if ($result)
        {
            echo '<script>
alert("User added succssefully");
window.location="dashboard.php";
</script>';
        }
        else
        {
            die(mysqli_error($con));
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
    <title>add user</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style type="text/css">
    </style>
</head>
<body class="image">
   <?php include ("includes/header.php"); ?>
 <?php include ("includes/sidebar.php"); ?>
<div class="container py-4">

    <div class="row justify-content-center">
        <div class="col-sm-5">
            <br>
             <h2 class="text-center text-decoration-underline py-4 mb-1"><strong>Add User:</strong></h2>
    <form action="add user.php" method="post" class="form-control-sm shadow" style="background: lavender;">
        <div class="form-group mb-2">
            <label class="text-dark"><strong>Username:</strong></label>
            <input type="text" name="username" required class="form-control">
        </div>

        <div class="form-group mb-2">
            <label class="text-dark"><strong>password:</strong></label>
            <input type="password" name="password" required class="form-control">
        </div>
        <div class="form-group mb-2">
            <label class="text-dark"><strong>Email:</strong></label>
            <input type="email" name="email" required class="form-control">
        </div>

        <button type="submit" class="btn btn-success mb-2">Save</button>
        <button  type="Reset" class="btn btn-danger mb-2">Reset</button>
         
    </form>
</div>
</div>
</div>
</body>

</html>

