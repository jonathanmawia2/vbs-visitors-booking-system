<!DOCTYPE html>
<html lang="en">
<head>
    <title>navbar</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
<style>
    .dropbtn {
        background-color: darkgrey;
        color: white;
        padding: 2px;
        padding-left: 4px;
        font-size: 16px;
        /*border: none;*/
    }

    .dropdown {
        position: relative;
        /*display:block;*/
    }

    .dropdown-content {
        display: none;
        position: absolute;
        background-color: #f1f1f1;
        min-width: 100px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
        z-index: 1;
    }

    .dropdown-content a {
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
    }

    .dropdown-content a:hover {background-color: #ddd;}

    .dropdown:hover .dropdown-content {display: block;}

    .dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>

</head>
<body>
<nav class="navbar navbar-expand-sm bg-primary navbar-dark">
    <a class="navbar-brand pl-5 " href="About us.php">Tsavo National Gamepark</a>
<!--    <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">-->
<!--        <span class="navbar-toggle-icon"></span>-->
<!--    </button>-->

<!--    nav links-->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
<!--        this php if statement code, make the links below to be displayed only if the user is logged in-->

        <ul class="navbar-nav ml-auto list-unstyled pt-3">
          <li class="nav-item">
              <a class="nav-link text-white" href="visitor.php">New visitor</a>
          </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="Pricing1.php">Pricing</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="rides1.php ">Rides</a>
            </li>
             <li class="nav-item">
                <a class="nav-link text-white" href="add user.php ">New user</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="ticket.php">Tickets</a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white" href="#">Reports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="login.php">Login</a>
            </li>
            <div class="dropdown">
                <li class="dropbtn">Dropdown
                 </li>
                <div class="dropdown-content">
                    <a href="#">profile</a>
                    <a href="#">change password</a>
                    <a href="login.php">logout</a>
                </div>   
        </ul>

    </div>
</nav>
</body>
</html>