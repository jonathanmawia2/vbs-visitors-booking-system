<?php
if (isset($_POST["id"]))
 {
	$id = $_POST["id"];
	$username = $_POST["username"];
	$emailuser = $_POST["emailuser"];

	include ("includes/connect.php");
	$sql ="UPDATE `users` SET `username`='$username',`email`='$emailuser' WHERE id=$id";
	$query = mysqli_query($con,$sql) or die(mysqli_error($con));
	if ($query)
	 {
		echo '<script>
alert("User updated successfully");
window.location="user_list.php";
		</script>';
	}
	else
	{
		echo "failed to update" .mysqli_error($query);
	}
}
// header("location:user_list.php");