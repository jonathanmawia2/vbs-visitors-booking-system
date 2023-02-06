<?php
if (isset($_REQUEST["pricing_id"]))
 {
 	$id = $_REQUEST["pricing_id"];
	include ("includes/connect.php");
    $sql = "SELECT * FROM pricing WHERE pricing_id= $id";
    $query = mysqli_query($con,$sql) or die(mysqli_error($con));
    if (mysqli_num_rows($query)== 0) 
    {
    	echo '<script>
 alert("Zero number of rows found!");
 window.location = "pricing_list.php";
</script>';
    }
    else
    {
   $pricing = mysqli_fetch_assoc($query);
   // var_dump($pricing);
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit pricing</title>
    <link rel="stylesheet" href="includes/bootstrap.min.css">
    <!-- to make our navbar expand and collupse, we need to add a javascript links below-->
   

</head>
<body>
  <?php include ("includes/header.php"); ?>
  <?php include ("includes/sidebar1.php"); ?>
<div class="container py-4">
<div class="row justify-content-center">
        <div class="col-sm-5">
            <br><br><br>
            <h2 class="text-center text-decoration-underline py-2 mb-1"><strong>Edit pricing:</strong></h2>
        <form action="edit_save_update.php" method="POST" class="form-control-sm shadow" style="background: lavender;">
        	<input type="hidden" name="pricing_id" value="<?= $pricing['pricing_id'] ?>">

            <div class="form group mb-2">
                <label class="text-dark"><strong>Name:</strong></label><input type="text" name="name" value="<?= $pricing['name'] ?>" class="form-control" required>
            </div>
            <div class="form group mb-2">
                <label class="text-dark"><strong>Adult_price:</strong></label><input type="text" name="adultp" value="<?= $pricing['adult_price'] ?>" class="form-control" required>
            </div>
            <div class="form group mb-2">
                <label class="text-dark"><strong>Child_price:</strong></label><input type="text" name="childp" value="<?= $pricing['child_price'] ?>" class="form-control" required>
            </div>
            <div class="form group mb-2">
                <label class="text-dark"><strong>Date_created:</strong></label><input type="text" name="datec" value="<?= $pricing['date_created'] ?>" class="form-control" required>
            </div>
            <button class="btn btn-success btn-block">save update</button>
        </form>
    </div>
</div>
</div>
</body>
</html>