<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if (isset($_POST["pricing_id"]))//checks whether the data we want to delete is set or is there. we can either use get or request methods.
 {
 	$id = $_POST["pricing_id"];
 	$name = $_POST["name"];
 	$adultp = $_POST["adultp"];
 	$childp = $_POST["childp"];
 	$datec = $_POST["datec"];
 	
 	$con =mysqli_connect("localhost" ,"root" ,"" ,"park") or die(mysqli_connect_error());
	$sql = "UPDATE pricing SET name='$name' , adult_price='$adultp', child_price='$childp', date_created='$datec' WHERE pricing_id = $id ";
    $result = mysqli_query($con,$sql) or die(mysqli_error($con));
    if ($result)
	 {
		 echo '<script>
alert("pricing updated successfully");
window.location = "pricing_list.php";
</script>';
	}
	else
	{
		echo "failed" .mysqli_error($result);
	}

  }
 ?>



