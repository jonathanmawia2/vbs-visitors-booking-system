<?php
include ("includes/protect.php");
if (isset($_REQUEST["name"]))
{
    $name = $_REQUEST["name"];
    $noadult = $_REQUEST["noadult"];
    $nochild = $_REQUEST["nochild"];
    $adultp = $_REQUEST["adultp"];
    $childp = $_REQUEST["childp"];
    $tamt = $_REQUEST["tamt"];
    $amtg = $_REQUEST["amtg"];
    $bal = $_REQUEST["bal"];
    $datec = $_REQUEST["datec"];
        
        include ("includes/connect.php");
        $sql = "INSERT INTO `tickets`(`t_id`, `name`, `no_adults`, `no_childs`, `adult_price`, `child_price`, `total_amount`, `amount_tendered`, `balance`, `date_created`) VALUES ('null','$name','$noadult','$nochild','$adultp','$childp','$tamt','$amtg','$bal','$datec')";
        $result = mysqli_query($con,$sql); 
        if ($result)
         {
        	echo '<script>
           alert("ticket added succssefully");
       window.location="ticket.php";
        	</script>';
         }
         else
         {
         	die(mysqli_error($con));
         }
      }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Ticket</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jautocalc.js"></script>
    <script src="jautocalc.min.js"></script>
</head>
<body>
 <?php include ("includes/navbar.php"); ?>
<div class="container">

    <div class="row justify-content-center">
        <div class="col-sm-5">
            <h2 class="text-center text-decoration-underline py-2 mb-1"><strong>Add ticket:</strong></h2>
        <form action="ticket.php" method="post" class="form-control-sm shadow bg-transparent">
            <div class="form group mb-2">
                <label class="text-dark"><strong>name:</strong></label><input type="text" name="name" class="form-control" required>
            </div>
            <div class="form group mb-2">
                <label class="text-dark"><strong>no_adults:</strong></label><input type="number" name="noadult" class="form-control" required>
            </div>
            <div class="form group mb-2">
                    <label class="text-dark"><strong>No-childs:</strong></label><input type="number" name="nochild" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Adult_price:</strong></label><input type="text" name="adultp" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Child Price:</strong></label><input type="text" name="childp" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Total_amount:</strong></label><input type="text" name="tamt" class="form-control" value="{nochild*childp}" readonly="readonly">
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Amount_given:</strong></label><input type="text" name="amtg" class="form-control" >
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Balance:</strong></label><input type="text" name="bal" class="form-control">
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Date_created:</strong></label><input type="date" name="datec" class="form-control" placeholder="optional">
                </div>
                
            <button class="btn btn-success mb-2">Register</button>
            <button class="btn btn-danger mb-2">clear</button>
        </form>
        </div>
    </div>
</div>
 <?php include ("includes/footer.php"); ?>   
</body>
</html>