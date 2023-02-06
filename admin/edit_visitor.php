<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_REQUEST["vistors_id"]))//checks whether the data we want to delete is set or is there. we can either use get or request methods.
 {
 	$id = $_REQUEST["vistors_id"];
	// include ("includes/connect.php");
	$con =mysqli_connect("localhost" ,"root" ,"" ,"park") or die(mysqli_connect_error());
	$sql = "SELECT * FROM `vistors` WHERE vistors_id= $id";
    $result = mysqli_query($con,$sql) or die(mysqli_error($con));

    if (mysqli_num_rows($result) == 0)//checks the number of rows withe specified id from the database. if none(0), the page redirects us back to visitors list.
    {
    	header("location:visitor_list.php");
    }
    $user = mysqli_fetch_assoc($result);
    // var_dump($user);
 }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link rel="stylesheet" href="bootstrap.min.css"/>
 <body>
   <?php include ("includes/header.php"); ?>
 <?php include ("includes/sidebar1.php"); ?>

 	<div class="container py-4">

    <div class="row justify-content-center">
        <div class="col-sm-5">
            <br><br><br>
            <h2 class="text-center text-decoration-underline py-2 mb-1"><strong>Edit Visitor:</strong></h2>
        <form action="save_update.php" method="POST" class="form-control-sm shadow" style="background: lavender;">
        	<!-- save_update is the form that is going to pick our data and do the actual saving of the data to the database -->
        	<!-- this hidden input is used to identify which record(visitor) we want to edit or update. -->
        	<input type="hidden" name="vistors_id" value="<?= $user['vistors_id'] ?>">
            <div class="form group mb-2">
                <label class="text-dark"><strong>Full name:</strong></label><input type="text" name="fullname" value="<?=$user['fullname'] ?>" class="form-control" required>
            </div>
            <div class="form group mb-2">
                <label class="text-dark"><strong>Idno:</strong></label><input type="text" name="idno" value="<?=$user['idno'] ?>" class="form-control" required>
            </div>
            <div class="form group mb-2">
                    <label class="text-dark"><strong>PhoneNo:</strong></label><input type="text"  name="phone" value="<?= $user['phoneno'] ?>" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Visiting date:</strong></label><input type="date" name="vdate" value="<?= $user['vdate']?>" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Visiting time:</strong></label><input type="time" name="vtime" value="<?= $user['vtime'] ?>" class="form-control" required>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Car No:</strong></label><input type="text" name="carno" value="<?= $user['car_no']?>" class="form-control">
                </div>
            <button class="btn btn-success mb-2 btn-block">Save update</button>
           
        </form>
        </div>
    </div>
</div>
 	
 </body>
</head>
</html>