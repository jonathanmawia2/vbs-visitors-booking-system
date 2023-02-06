 
 <?php 
 error_reporting(E_ALL ^ E_NOTICE);

 session_start();
  ?>
 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>header</title>
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap.min.css">
    <style type="text/css">
       
        header{
            position: fixed;
            background: lavender;
            padding: 20px;
            width: 100%;
            height: 70px;
        }
        .left_area h3{
            color: black;
            margin: 0;
            text-transform: uppercase;
            font-size: 22px;
            font-weight: 900;
        }
        img{
             width: 80px;
            height: 50px;
            border-radius: 12px;
            margin-top: -10px;
        }
       .img{
            width: 30px;
            height: 30px;
            border-radius: 20px;
            margin-top: 8px;

        }
        .left_area span{
            color: #1DC4E7;
        }
        #center_area{
            float: center;
            position: fixed;
            margin-top: -50px;
            padding-left: 70%;
        }
        #center_area span{
            color: #1DC4E7;
            font-style: italic;
        }
         .login_btn{
            padding: 12px;
            background: #19B3D3;
            width: 85px;
            text-align: center;
            text-decoration: none;
            float: right;
            margin-top: -50px;
            margin-right: 40px;
            border-radius: 2px;
            font-weight: 600px;
            font-size: 20px;
            color: black;
            transition: 0.5s;
            transition-property: background;
        }

        .logout_btn{
            padding: 8px;
            background: #19B3D3;
            text-decoration: none;
            width: 70px;
            float: right;
            margin-top: -50px;
            margin-right: 40px;
            border-radius: 2px;
            font-weight: 600px;
            font-size: 20px;
            color: #fff;
            transition: 0.5s;
            transition-property: background;
        }
         
        .logout_btn:hover{
           background:#0D9DBB;
        }
    	
    </style>
</head>
<body>
	<header>
        <div class="left_area">
            <h3><img src="images/logo 2.png">  WILDERNESS  <span>BOOKINGS</span></h3>
        </div>
        <div id="center_area" class="mx-auto">
            <h4><?= $_SESSION["usertype"]?> <img class="img" src="avartas/avatar.jpg"> <span><?=$_SESSION["username"]?></span></h4>
        </div>
        <?php if (isset($_SESSION["logged_in"])): ?>
        <div class="right_area">
        <a href="logout.php" class="logout_btn">logout</a>  
        </div>
        
        <?php endif; ?>
        <?php if ( ! isset($_SESSION["logged_in"])): ?>
        <?php endif; ?>
    </header>
</body>
</html>







 