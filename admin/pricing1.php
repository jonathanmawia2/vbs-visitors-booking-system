<?php
include ("includes/protect.php");
if (isset($_REQUEST["name"])) 
{
    $name = $_REQUEST["name"];
    $adult = $_REQUEST["adult"];
    $child = $_REQUEST["child"];
    $datec = $_REQUEST["datec"];

     include ("includes/connect.php");
     $sql = "INSERT INTO `pricing`(`pricing_id`, `name`, `adult_price`, `child_price`, `date_created`) VALUES ('null','$name','$adult','$child','$datec')";
     $query = mysqli_query($con,$sql) ; 
     if ($query)
     {
      echo '<script>
alert("price added  succefully");
window.location = "pricing_list.php"
</script>';
        }
        else
        {
            echo '<script>
      alert("Failed!, please try again")
      window.location = "visitor.php"

            </script>';
        }
   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add pricing</title>
    <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body>

<?php include ("includes/header.php"); ?>
 <?php include ("includes/sidebar.php"); ?>

<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-sm-5">
          <br><br>
            <h2 class="text-center text-decoration-underline py-2 mb-1"><strong>pricing:</strong></h2>
        <form action="pricing1.php" method="post" class="form-control-sm shadow" style="background: lavender;">
            <div class="form group mb-2">
                <label class="text-dark"><strong>name:</strong></label><input type="text" name="name" class="form-control" required>
            </div>
            <div class="form group mb-2">
                <label class="text-dark"><strong>Adult price:</strong></label><input type="text" name="adult" class="form-control" required>
            </div>
             <div class="form group mb-2">
                <label class="text-dark"><strong>Child price:</strong></label><input type="text" name="child" class="form-control" required>
            </div>
             <div class="form group mb-2">
                <label class="text-dark"><strong>Date Created:</strong></label><input type="date" name="datec" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-success mb-2">Save</button>
            <button type="Reset" class="btn btn-danger mb-2">Reset</button>
             
        </form>
        </div>
    </div>
</div>

</body>
</html>