 <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>header</title>
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
    <style type="text/css">
       
        footer{
            position: fixed;
            background: #22242A;
            padding: 20px;
            width: 100%;
            height: 70px;
        }
        .left_area h3{
            color: #fff;
            margin: 0;
            text-transform: uppercase;
            font-size: 22px;
            font-weight: 900;
        }
        .left_area span{
            color: #1DC4E7;
        }
         .login_btn{
            padding: 8px;
            background: #19B3D3;
            text-decoration: none;
            float: right;
            margin-top: -30px;
            margin-right: 40px;
            border-radius: 2px;
            font-weight: 600px;
            font-size: 15px;
            color: #fff;
            transition: 0.5s;
            transition-property: background;
        }

        .logout_btn{
            padding: 8px;
            background: #19B3D3;
            text-decoration: none;
            float: right;
            margin-top: -30px;
            margin-right: 40px;
            border-radius: 2px;
            font-weight: 600px;
            font-size: 15px;
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
	<footer>
        <div class="left_area">
            <h3>Tsavo<span>BOOKINGS</span></h3>
        </div>
        
        <div class="right_area">
          <a href="login.php" class="logout_btn">logout</a>  
        </div>
         <div class="right_area">
          <a href="login.php" class="login_btn">login</a>  
        </div>
    </footer>
</body>
</html>







 