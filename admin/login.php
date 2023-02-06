<?php
if (isset($_REQUEST['email']))
{
   
    $email = $_REQUEST["email"];
    $password = $_REQUEST["password"];
   
   include ("includes/connect.php");
   //retrive one record that matches that email.(only one email should match).
   //check the password hash(encrypted password in our database) 
   //if the above steps are ok, you need to storedata in a session.
   $query = mysqli_prepare($con, "SELECT * FROM users WHERE email = ?"); //this lines are used to prevent mysqli injection.
   mysqli_stmt_bind_param($query, "s" , $email);
   mysqli_stmt_execute($query);//same as(mysqli_query).
   $result = mysqli_stmt_get_result($query);
   if (mysqli_num_rows($result)==1)
    {
      $user = mysqli_fetch_assoc($result);
      // var_dump($user);
      // die();
      $hash = $user["password"];
      if (password_verify($password , $hash))
       {
         session_start();
         $_SESSION["username"] = $user["username"];//store login information
         $_SESSION["usertype"] = $user["usertype"];
         $_SESSION["logged_in"] = true;
        // header("location:visitor.php");
         echo '<script>
        alert("successfully logged in");
        window.location="dashboard.php";
         </script>';

       }
      else
      {
        // setcookie("error" , "Wrong email or password", time()+3);
        echo '<script>
alert("failed!, incorrect username or password");
window.location="login.php";
        </script>';
      }

    }
   


   }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In</title>
    <link rel="stylesheet" href="includes/bootstrap.min.css">
    <style type="text/css">
    body{
      background-image: url('images/tsavo bg.jpg');
      background-color: #cccccc;  background-position: center;
      background-repeat: no-repeat;
      background-size: cover;   
      height: 100%;
      width: 100%;
    }
    </style>

</head>
<body>
   <div id="main-wrapper">
        <div class="unix-login">
   
<div class="container">

    <div class="row justify-content-center">
        <div class="col-sm-5">
            <br><br><br>
             <!-- <h2 class="text-center text-decoration-underline py-4 mb-1"><strong>Wilderness Safaris Login:</strong></h2> -->
             <div class="card">
               <div class="card-header"> <center><img src="images/logo 2.png" style="height: 100px; width: 100%;"></center><br></div>
               <div class="card-body">
         <form action="login.php" method="post" class="form-control-sm shadow">
        
        <div class="form-group mb-2">
            <label class="text-dark"><strong>Email:</strong></label>
            <input type="email" name="email" required placeholder="email address" class="form-control">
        </div>

        <div class="form-group mb-2">
            <label class="text-dark"><strong>password:</strong></label>
            <input type="password" name="password" placeholder="password" required class="form-control">
        </div>
        
         <div>
        <button type="submit" class="btn btn-secondary mb-2 btn-block">Sign in</button>  
        </div>
          <div class="forgot-phone col-md-12 text-right">
            <a href="#" class="text-right f-w-600 "> Forgot Password?</a>
          </div>
          <br>
          <p style="color: red; font-size: 16px;"><b>
          for enquiries contact :<a href="#">jonathanmuthini2@gmail.com</a></b>
          </p>
         
    </form>
  </div>
             </div>
             
            
   
</div>
</div>
</div>
</body>

</html>

