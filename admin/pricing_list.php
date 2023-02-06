<?php
include ("includes/protect.php");
include ("includes/connect.php");
$sql = "SELECT * FROM pricing";
$query = mysqli_query($con,$sql);
$result = mysqli_fetch_all($query, 1);

// var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add pricing</title>
    <link rel="stylesheet" href="includes/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/buttons.dataTables.min.css">
    <script type="text/javascript" href="includes/bootstrap.min.js"></script>
     <style type="text/css">
    	.icon{
    		width: 25px;
    		height: 25px;
    	}
    	.edit{
    		width: 25px;
    		height: 25px;
    	}
    </style>
</head>
<body>
	 <?php include ("includes/header.php"); ?>
     <?php include ("includes/sidebar.php"); ?>
<div class="container py-4">
	
	<div class="row justify-content-center">
		<div class="col-sm-8">
            <br><br>
            <h3 class="text-center mb-3 font-style-bold text-decoration-underline"><strong>pricing list</strong></h3>
			<table id="dt" class="table table-bordered table-striped py-4">
                <thead>
				<tr>
					<th><strong>pricing_id</strong></th>
					<th><strong>name</strong></th>
					<th><strong>adult_price</strong></th>
					<th><strong>child_price</strong></th>
					<th><strong>date_created</strong></th>
					<th><strong>delete</strong></th>
					<th><strong>edit</strong></th>
				</tr>
                </thead>
                <tbody>
				<?php foreach ($result as $pricing): ?>
					<tr>
            		<td> <?= $pricing["pricing_id"] ?> </td>
            		<td> <?= $pricing["name"] ?> </td>
            		<td> <?= $pricing["adult_price"] ?> </td>
            		<td> <?= $pricing["child_price"] ?> </td>
            		<td> <?= $pricing["date_created"] ?> </td>
            		<td> <a href="delete_pricing.php?pricing_id=<?= $pricing["pricing_id"] ?>"><img class="icon" src="icons\del.jpeg"></a> </td>
            		<td> <a href="edit_pricing.php?pricing_id=<?= $pricing["pricing_id"] ?>"><img class="edit" src="icons\edit2.png"></a> </td>
            	</tr>
                <?php endforeach; ?>
            </tbody>

			</table>
			
		</div>
		
	</div>
	
</div>
<script src="includes/jquery.min.js"></script>
<script src="includes/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#dt').DataTable();
    });
</script>
</body>
</html>





