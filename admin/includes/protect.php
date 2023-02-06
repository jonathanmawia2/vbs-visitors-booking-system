<?php 
session_start();
if ( ! isset($_SESSION["logged_in"]))
 {
	echo '<script>
alert("Sorry! you need to log in first to access these page")
window.location="login.php";

	</script>';
 }
 //checking if the session exists.
 //if the session doesnot exist, the user will only be directed to the login page.
