<?php
if (isset($_REQUEST["ride_id"])) 
{
	$id = $_REQUEST["ride_id"];
	// include ("includes/connect.php");
	$con =mysqli_connect("localhost" ,"root" ,"" ,"park") or die(mysqli_connect_error());
	$sql = "SELECT * FROM rides WHERE ride_id = $id";
	$result = mysqli_query($con,$sql) or die(mysqli_error($con));
	if (mysqli_num_rows($result)== 0)
	 {
		header("location:rides_list");
	}
	$ride = mysqli_fetch_assoc($result);
	// var_dump($ride);
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
            <h2 class="text-center text-decoration-underline py-2 mb-1"><strong>Edit Ride:</strong></h2>
            <form action="ride_save_update.php" method="POST" class="form-control-sm shadow" style="background: lavender;">
        	<!-- save_update is the form that is going to pick our data and do the actual saving of the data to the database -->
        	<!-- this hidden input is used to identify which record(visitor) we want to edit or update. -->
        	<input type="hidden" name="ride_id" value="<?= $ride['ride_id'] ?>">
            <div class="form group mb-2">
                <label class="text-dark"><strong>Title:</strong></label><input type="text" name="title" value="<?= $project['title'] ?>" class="form-control" required>
            </div>
            <div class="form group mb-2">
                    <label class="text-dark"><strong>Department:</strong></label><input type="text"  name="deparment" value="<?= $project['department'] ?>" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Date created:</strong></label><input type="date" name="datec" value="<?= $ride['date_created']?>" class="form-control" required>
                </div>
            <button class="btn btn-success mb-2 btn-block">Save update</button>
           
        </form>
            	
            </form>
            </div>
        </div>
    </div>
</body>
</head>
</html>