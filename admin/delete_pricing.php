<?php
if (isset($_GET["pricing_id"]))
 {
 	$id = $_GET["pricing_id"];
	include ("includes/connect.php");
	$sql = "DELETE FROM pricing WHERE pricing_id= $id";
	$result = mysqli_query($con,$sql);
	if ($result)
	 {
		 echo '<script>
alert("pricing deleted successfully");
window.location = "pricing_list.php";
</script>';
	}
	else
	{
		echo "failed" .mysqli_error($result);
	}

}
// header("location:pricing_list.php");




?>