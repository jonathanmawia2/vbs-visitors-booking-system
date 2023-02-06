<?php
if (isset($_GET["vistors_id"]))//checks whether the data we want to delete is set or is there. we can either use get or request methods.
 {
 	$id = $_GET["vistors_id"];
	// include ("includes/connect.php");
	$con =mysqli_connect("localhost" ,"root" ,"" ,"park") or die(mysqli_connect_error());
	$sql = "DELETE FROM `vistors` WHERE vistors_id= $id";
    mysqli_query($con,$sql) or die(mysqli_error($con));
	mysqli_close($con);
 }
 header("location:visitor_list.php");//after deletion it redirects us back to visitors_list.php.

