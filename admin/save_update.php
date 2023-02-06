<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["vistors_id"]))//checks whether the data we want to delete is set or is there. we can either use get or request methods.
 {
 	$id = $_POST["vistors_id"];
 	$fullname = $_POST["fullname"];
 	$idno = $_POST["idno"];
 	$phone = $_POST["phone"];
 	$vdate = $_POST["vdate"];
 	$vtime = $_POST["vtime"];
 	$carno = $_POST["carno"];
 	$con =mysqli_connect("localhost" ,"root" ,"" ,"park") or die(mysqli_connect_error());
	$sql = "UPDATE vistors SET fullname='$fullname', idno='$idno',phoneno='$phone', vdate='$vdate', vtime='$vtime', car_no='$carno' WHERE vistors_id = $id ";
    $result = mysqli_query($con,$sql) or die(mysqli_error($con));

  }
  header("location:visitor_list.php");

