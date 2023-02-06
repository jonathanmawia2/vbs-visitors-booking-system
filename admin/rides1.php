<?php
include ("includes/protect.php");
if (isset($_REQUEST["ride"])) 
{
    $ride = $_REQUEST["ride"];
    $description = $_REQUEST["description"];
    $date_created = $_REQUEST["date_created"];

     include ("includes/connect.php");
     $sql = "INSERT INTO `rides`(`ride_id`, `t_id`, `name`, `description`, `date_created`) VALUES ('null','null','$ride','$description','$date_created')";
     $query = mysqli_query($con,$sql) ;
      if ($query)
     {
         echo '<script>
alert("Ride added successfully");
window.location = "rides_list.php";
</script>';
    }
    else
    {
        echo "failed" .mysqli_error($result);
    } 
 }  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Ride</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<!-- navbar appeaars here -->

<?php include ("includes/header.php"); ?>
 <?php include ("includes/sidebar.php"); ?>
	
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-sm-5">
           <br><br> 
            <h2 class="text-center text-decoration-underline py-2 mb-1"><strong>Add Ride:</strong></h2>
        <form action="rides1.php" method="post" class="form-control-sm shadow" style="background: lavender;">
            <div class="form group mb-2">
                <label class="text-dark"><strong>Ride:</strong></label><input type="text" name="ride" class="form-control" required>
            </div>
            <div class="form-group mb-2">
                    <label class="text-dark"><strong>Description:</strong></label>
                    <textarea name="description" class="form-control"></textarea>
            </div>
             <div class="form group mb-2">
                <label class="text-dark"><strong>Date_created:</strong></label><input type="date" name="date_created" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success mb-2 ml-auto">Save</button>
            <button type="reset" class="btn btn-danger mb-2">Reset</button>
        </form>
        </div>
    </div>
</div>
    
</body>
</html>