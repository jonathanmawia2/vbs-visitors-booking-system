<?php include ("includes/protect.php");?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="includes/bootstrap.min.css">
    <style type="text/css">
    
    </style>
</head>
<body>
   <?php include ("includes/header.php"); ?>
   <?php include ("includes/sidebar.php"); ?>
	<div class="container py-4">
		<br><br>
    <h2 class="text-center"><strong><u>Dashboard</u></strong></h2>
    <br>
		<div class="row justify-content-center">
			<div class="col-xl-2 col-md-3">

				<div class="card bg-primary text-white mb-4 text-center">
					<div class="card-body"><strong>Total Visitors</strong>
						<br>	
							<?php 	
                            $connect = mysqli_connect("localhost","root","","park") or die(mysqli_connect_error($connnect));
                            $sql = "SELECT * FROM vistors";
                            $query = mysqli_query($connect,$sql) or die("failed" .mysqli_error($connect));
                            $rows = mysqli_num_rows($query);
                            if ($rows != 0) 
                            {
                            	 echo '<h4 class="mb-3">'.$rows.'</h4>';
                            }
                            else
                            {
                            	echo '<h4 class="mb-4"> 0 </h4>';
                            }
							 ?>
						
					</div>
					<div class="card-footer d-flex align-items-center justify-content-between">
						<a class="small text-white stretched-link" href="visitor_list.php">view details</a>
					</div>
				</div>
			</div>

			<div class="col-xl-2 col-md-3">
				<div class="card bg-warning text-white mb-4 text-center">
					<div class="card-body"><strong>Total Users</strong>
						<br>
						<?php 	
                         $connect = mysqli_connect("localhost", "root","","park") or die(mysqli_connect_error($connect));
                         $sql = "SELECT * FROM users";
                         $query = mysqli_query($connect,$sql) or die(mysqli_error($connect));
                         $rows = mysqli_num_rows($query);
                         if ($rows != 0)
                          {
                         	echo '<h4 class="mb-3">'.$rows.'</h4>';
                          }
                          else
                          {
                          	echo '<h4 class="mb-4"> 0 </h4>';
                          }
						 ?>
						</div>
					<div class="card-footer d-flex align-items-center justify-content-between">
						<a class="small text-white stretched-link" href="user_list.php">view details</a>
					</div>
				</div>
			</div>

            <div class="col-xl-2 col-md-3">
				<div class="card bg-success text-white mb-4 text-center">
					<div class="card-body"><strong>Total Tickets</strong>
						<br>
						<?php 	
                         $connect = mysqli_connect("localhost", "root","","park") or die(mysqli_connect_error($connect));
                         $sql = "SELECT * FROM tickets";
                         $query = mysqli_query($connect,$sql) or die(mysqli_error($connect));
                         $rows = mysqli_num_rows($query);
                         if ($rows != 0)
                          {
                         	echo '<h4 class="mb-3">'.$rows.'</h4>';
                          }
                          else
                          {
                          	echo '<h4 class="mb-4"> 0 </h4>';
                          }
						 ?>
						</div>
					<div class="card-footer d-flex align-items-center justify-content-between">
						<a class="small text-white stretched-link" href="tickets_list.php">view details</a>
					</div>
				</div>
			</div>

			<div class="col-xl-2 col-md-3">
				<div class="card bg-info text-white mb-4 text-center">
					<div class="card-body"><strong>Total Rides</strong>
						<br>
						<?php 	
                         $connect = mysqli_connect("localhost", "root","","park") or die(mysqli_connect_error($connect));
                         $sql = "SELECT * FROM rides";
                         $query = mysqli_query($connect,$sql) or die(mysqli_error($connect));
                         $rows = mysqli_num_rows($query);
                         if ($rows != 0)
                          {
                         	echo '<h4 class="mb-3">'.$rows.'</h4>';
                          }
                          else
                          {
                          	echo '<h4 class="mb-4"> 0 </h4>';
                          }
						 ?>
						</div>
					<div class="card-footer d-flex align-items-center justify-content-between">
						<a class="small text-white stretched-link" href="rides_list.php">view details</a>
					</div>
				</div>
			</div>



			



		</div>
	</div>
</body>
</html>


