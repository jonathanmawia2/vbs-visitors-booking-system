<?php
if (isset($_REQUEST["id"]))
 {
 	$id = $_REQUEST["id"];
	include ("includes/connect.php");
	$sql = "SELECT * FROM users WHERE id = $id";
	$query = mysqli_query($con,$sql) or die(mysqli_error($con));
	if (mysqli_num_rows($query)==0)
	 {
		echo '<script>
alert("sorry! zero rows found for the specified query");
window.location="user_list.php";
		</script>';
	}
	else
	{
		$user = mysqli_fetch_assoc($query);
		// var_dump($user);
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit user</title>
    <link rel="stylesheet" href="bootstrap.min.css">
   
</head>
<body>
  <?php include ("includes/header.php"); ?>
 <?php include ("includes/sidebar1.php"); ?>
<div class="container py-5">
	<br><br>
	<h3 class="text-center mb-3 font-style-bold text-decoration-underline"><strong>Edit user</strong></h3>
	<div class="row justify-content-center">
		<div class="col-sm-6">
			<form class="form-control-sm shadow" method="POST" action="save_user_update.php" style="background: lavender;"> 
				<input type="hidden" name="id" value="<?=$user['id']?>">
				<div class="form-group mb-2 py-2">
					<label><strong>Username</strong></label>
				<input type="text" name="username" value="<?=$user['username']?>" class="form-control" required>
				</div>
				<div class="form-group mb-2 py-2">
					<label><strong>Email</strong></label>
				<input type="email" name="emailuser" value="<?=$user['email']?>" class="form-control" required>
				</div>
				<div class="mb-2"><button class="btn btn-success btn-block">Save update</button></div>
			</form>
		</div>
	</div>
</div>
</body>
</html>