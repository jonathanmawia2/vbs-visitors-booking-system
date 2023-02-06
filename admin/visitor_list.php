<?php
include ("includes/protect.php");
include ("includes/connect.php");
$sql = "SELECT * FROM vistors";
$query = mysqli_query($con,$sql) or die(mysqli_error($con));
$rows = mysqli_fetch_all($query, 1);//1 is used to make the results associative array, hence making it easy to undersrand 
mysqli_close($con);
// var_dump($rows[3]);
// foreach ($rows as $user){
// 	echo $user['fullname'];

// 	echo "<hr>";
// }
// echo json_encode($rows);//it converts data into json format
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visitors list</title>
    <link rel="stylesheet" href="includes/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="includes/buttons.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="includes/buttons.dataTables.min.css">
    <script type="text/javascript" href="includes/bootstrap.min.js"></script>
    <!--javascript link for datatables-->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
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
				<h3 class="text-center mb-3 font-style-bold text-decoration-underline"><strong>Visitors list</strong></h3>
				<table id="datatable" class="table table-striped table-bordered py-4">
					<thead>
					<tr>
						<th>photo</th>
						<th>visitor_id</th>
						<th>fullnanme</th>
						<th>idno</th>
						<th>gender</th>
						<th>phoneno</th>
						<th>visiting date</th>
						<th>visiting time</th>
						<th>carno</th>
						<th>payment_status</th>
						<th>delete</th>
						<th>edit</th>
					</tr>
					</thead>

				    <tbody>
				    <?php foreach ($rows as $user): ?>
                    <tr>
						<td> <img src="<?= $user["photo"] ?>" width="50" height="50"></td>
						<td> <?= $user["vistors_id"] ?> </td>
						<td> <?= $user["fullname"] ?> </td>
						<td> <?= $user["idno"] ?> </td>
						<td> <?= $user["gender"] ?> </td>
						<td> <?= $user["phoneno"] ?> </td>
						<td> <?= $user["vdate"] ?> </td>
						<td> <?= $user["vtime"] ?> </td>
						<td> <?= $user["car_no"] ?> </td>
						<td> <?= $user["payment_status"] ?> </td>
						<td> <a class="btn-sm" href="delete_visitor.php?vistors_id=<?=$user['vistors_id'] ?>"><img class="icon" src="icons\del.jpeg"></a> </td>
						<td> <a class="btn btn-sm" href="edit_visitor.php?vistors_id= <?=$user['vistors_id'] ?>"><img class="edit" src="icons\edit2.png"></a> </td>
					</tr>
				    <?php endforeach; ?>
				    <tbody>
				</table>
				</div>
		</div>
	</div>
<!-- javascript to make our tables to datatables -->

<script src="includes/jquery.min.js"></script>
<script src="includes/datatables.min.js"></script>
<script>
	$(document).ready(function(){
		$('#datatable').DataTable();
	});
	
</script>


</body>
</html>