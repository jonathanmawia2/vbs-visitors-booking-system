<?php
if (isset($_GET["id"]))
 {
	$id =$_GET["id"];
	include ("includes/connect.php");
	$sql = "DELETE FROM users WHERE id = $id";
	$query = mysqli_query($con,$sql);
	if ($query)
	 {
		echo '<script>
alert("user deleted successfully");
window.location="user_list.php";
		</script>';
	}
	else
	{
		echo "failed". mysqli_error($query);
	}
}