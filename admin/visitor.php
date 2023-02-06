<?php
include ("includes/protect.php");
if (isset($_REQUEST["fullname"]))
{
    $fullname = $_REQUEST["fullname"];
    $idno = $_REQUEST["idno"];
    $gender = $_REQUEST["gender"];
    $phone = $_REQUEST["phone"];
    $vdate = $_REQUEST["vdate"];
    $vtime = $_REQUEST["vtime"];
    $carno = $_REQUEST["carno"];
    $status = $_REQUEST["status"];
        $target_dir = "uploads/";
        $target_file = $target_dir . rand(1000 , 100000) ."_". basename($_FILES["vphoto"]["name"]);
        $file_extension = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
        if (move_uploaded_file($_FILES["vphoto"]["tmp_name"], $target_file))
        {
            $upload_status = 1;
        }
        include ("includes/connect.php");
        $sql = "INSERT INTO `vistors`(`vistors_id`, `ticket_no`, `fullname`, `idno`, `gender`, `phoneno`, `vdate`, `vtime`, `photo`, `car_no`, `payment_status`) VALUES ('null','null','$fullname','$idno','$gender','$phone','$vdate','$vtime','$target_file','$carno','$status')";
        $result = mysqli_query($con,$sql);
        if ($result)
        {
            echo '<script>
alert("Registration  succefull");
window.location = "dashboard.php"
</script>';
        }
        else
        {
            echo '<script>
      alert("Password mismatch!, please try again")
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
    <title>Add visitor</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <!-- to make our navbar expand and collupse, we need to add a javascript links below-->

</head>
<body>
<?php include ("includes/header.php"); ?>
 <?php include ("includes/sidebar.php"); ?>
<div class="container py-4">

<div class="row justify-content-center">
        <div class="col-sm-5">
            <br>
            <h2 class="text-center text-decoration-underline py-4"><strong>New Visitor:</strong></h2>
        <form action="visitor.php" method="post" class="form-control-sm shadow font-style-bold" enctype="multipart/form-data" style="background: lavender;">
            <div class="form group mb-2">
                <label class="text-dark"><strong>Full name:</strong></label><input type="text" name="fullname" class="form-control" required>
            </div>
            <div class="form group mb-2">
                <label class="text-dark font-lg"><strong>Idno:</strong></label><input type="text" name="idno" class="form-control" required>
            </div>
            <div class="form-group mb-2">
                <div class="form-control-check">
                <label class="text-dark"><strong>Gender:</strong></label>
                <input type="radio" name="gender" class="form-control-check" value="male" required>Male.
                <input type="radio" name="gender" class="form-control-check" value="female" required>Female.
                </div>
            </div>
            <div class="form-group mb-2">
                    <label class="text-dark"><strong>PhoneNo:</strong></label><input type="number" name="phone" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Visiting date:</strong></label><input type="date" name="vdate" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Visiting time:</strong></label><input type="time" name="vtime" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Photo:</strong></label><input type="file" name="vphoto" class="form-control" required>
                </div>
                <div class="form group mb-2">
                    <label class="text-dark"><strong>Car No:</strong></label><input type="text" name="carno" class="form-control" placeholder="optional">
                </div>

                <div class="form-group mb-2">
                <label class="text-dark"><strong>Status:</strong></label>
                <select class="form-select" name="status" required>
                    <option value="space"></option>
                    <option value="paid">paid</option>
                    <option value="not paid">not paid</option>
                </select>
                </div>
            <div class="ml-2">
            <button type="submit" class="btn btn-success mb-2 p-2">Save</button>
            <button type="Reset" class="btn btn-danger mb-2 p-2">Reset</button>
            </div>
        </form>
        </div>
    </div>
</div>  
</body>
</html>