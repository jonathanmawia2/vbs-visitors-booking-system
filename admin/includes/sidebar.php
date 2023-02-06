<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <title>sidebar</title>
    <link rel="stylesheet" type="text/css" href="font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="includes/bootstrap.min.css">
    <script type="text/javascript" src="jquery.min.js"></script>
    <script type="text/javascript" src="includes/popper.min.js"></script>
    <script type="text/javascript" src="bootstrap.min.js"></script>
    <style>
        body{
          margin: 0;
          padding: 0;
          font-family: "Roboto", sans-serif;  
        }
       
        .sidebar{
            background: lavender;
            margin-top: 70px;
            padding-top: 50px;
            position: fixed;
            left: 0px;
            width: 200px;
            height: 100%;
        }
        .sidebar a{
          color: #fff;
          display: block;
          width: 100%;
          line-height: 40px;
          text-decoration: none;
          padding-left: 20px;
          box-sizing: border-box;
          transition: 0.5s;
          transition-property: background;
            
        }
        .sidebar a:hover{
            background: #19B3D3; 
        }
         
         .dropbtn {
        color: black;
        padding: 5px;
        padding-left: 4px;
        font-size: 20px;
        border: none;
        list-style: none;
        text-align: center;
        box-sizing: border-box;
    }
     .dropbtn a{
        color: black;
        margin-top: -10px;
    }

    .dropdown {
        position: relative;
        display:block;
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 70px;
       /* box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);*/
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 2px 2px;
        text-decoration: none;
        display: block;

    }

    /*.dropdown-content a:hover {background-color: #ddd;}*/

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: blue;
        color: black;}



    </style>
</head>
<body>
    <!-- header -->
   
    <!-- end of the header -->
    <!-- sidebar start -->
    <div class="sidebar">
       <!--  <center>
            <img src="images/logo 2.png">
            <marquee direction="left" behavior="alternate" scrollamount=1 >
            <h3>WILDERNESS BOOKINGS</h3>
        </marquee>
        </center> -->

        <?php if (isset($_SESSION["logged_in"])): ?> 
       
        <div class="dropdown">
                <li class="dropbtn"><a href="dashboard.php">Dashboard</a>
                 </li>
            </div>
            <br>
        <div class="dropdown">
                <li class="dropbtn">Visitor
                 </li>
                <div class="dropdown-content">
                    <a href="Visitor.php">new vistor</a>
                    <a href="visitor_list.php">list</a>
                </div> 
            </div>
                <br>
        
        <div class="dropdown">
                <li class="dropbtn">User
                 </li>
                <div class="dropdown-content">
                    <a href="add user.php">new user</a>
                    <a href="user_list.php">list</a>
                </div> 
            </div>
                <br>
        <div class="dropdown">                
                <li class="dropbtn">Rides
                 </li>
                <div class="dropdown-content">
                    <a href="rides1.php">new ride</a>
                    <a href="rides_list.php">list</a>
                </div>   
        </div> 
        <br>
        <div class="dropdown">
                <li class="dropbtn">Pricing
                 </li>
                <div class="dropdown-content">
                    <a href="pricing1.php">new pricing</a>
                    <a href="pricing_list.php">list</a>
                </div> 
            </div>
                <br>
                <div class="dropdown">
                <li class="dropbtn">Tickets
                 </li>
                <div class="dropdown-content">
                    <a href="#">new Ticket</a>
                    <a href="#">list</a>
                </div> 
            </div>
                <br>
                <div class="dropdown">
                <li class="dropbtn">Report
                 </li>
                <div class="dropdown-content">
                    <a href="#">new report</a>
                    <a href="#">list</a>
                </div> 
            </div>
                <br> 
                <?php endif; ?>      
    </div>

    
</body>
</html>