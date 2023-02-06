<?php
include ("includes/protect.php");
 include ("includes/connect.php");
 $sql = "SELECT * FROM rides";
 $query = mysqli_query($con,$sql) or die(mysqli_error($con));
 $result = mysqli_fetch_all($query, 1);
 // var_dump($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rides list</title>
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
 <?php include ("includes/sidebar.php"); ?>>
<div class="container py-4">
  <div class="row justify-content-center">
		<div class="col-sm-8">
            <br><br>
            <h3 class="text-center mb-3 font-style-bold text-decoration-underline"><strong>Rides list</strong></h3>
			<table id="dt" class="table table-bordered table-striped py-4">
                <thead>
				<tr>
					<th>Ride_id</th>
					<th>Ride</th>
					<th>Description</th>
					<th>Date created</th>
					<th>Delete</th>
					<th>Edit</th>
				</tr>
                </thead>
				<tbody>
               <?php foreach ($result as $ride): ?>
				<tr>
            		<td> <?= $ride["ride_id"] ?> </td>
            		<td> <?= $ride["name"] ?> </td>
            		<td> <?= $ride["description"] ?> </td>
            		<td> <?= $ride["date_created"] ?> </td>
            		<td> <a href="delete_ride.php?ride_id= <?= $ride["ride_id"] ?>"><img class="icon" src="icons\del.jpeg"></a> </td>
            		<td> <a href="edit_ride.php?ride_id= <?= $ride["ride_id"] ?>"><img class="edit" src="icons\edit2.png"></a> </td>
            	</tr>
               <?php endforeach; ?>
               </tbody>
            </table>

		</div>
    </div>
</div>
<script src="includes/jquery.js"></script>
<script src="includes/datatables.min.js"></script>
<script>
    $(document).ready(function(){
        $('#dt').DataTable();
    });
    
</script>
</body>
</html>
