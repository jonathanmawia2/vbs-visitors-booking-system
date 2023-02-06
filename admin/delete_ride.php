<?php
if (isset($_GET["ride_id"]))
 {
	$id = $_GET["ride_id"];
	include ("includes/connect.php");
	$sql = "DELETE FROM rides WHERE ride_id = $id";
	$result = mysqli_query($con,$sql);
	if ($result) 
	{
		echo '<script>
alert("ride deleted successfully!");
window.location="rides_list.php";
		</script>';
	}
	else
	{
		echo "failed" .mysqli_error($result);
	}
}

?>