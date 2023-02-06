<?php

if (isset($_POST["ride_id"]))
 {
 $id = $_POST["ride_id"];
$name = $_POST["name"];
$description = $_POST["description"];
$datec = $_POST["datec"];
$con =mysqli_connect("localhost" ,"root" ,"" ,"park") or die(mysqli_connect_error());
$sql = "UPDATE rides SET name = '$name', description = '$description', date_created = '$datec' WHERE ride_id = $id";
$result = mysqli_query($con,$sql) or die(mysqli_error($con));

}
header("location:rides_list.php");

