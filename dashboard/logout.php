<html>
<head>
    <meta charset="utf-8">
    <title>Logout</title>
</head>


<?php
$hostname="localhost"; 		//hostname
$username="root"; 			//username for database
$password=""; 				//database password
$dbname="project"; 		//database name
$connect=mysqli_connect($hostname,$username,$password,$dbname) or die("Error Connecting ".  mysqli_connect_error());

session_start();
if(!$_SESSION['email']){
    echo "<script> alert('Please login first') </script>";
    header('Location: ../login/login.php');
}
?>

<body>
<?php
include('../register/register.php');
// remove all session variables
session_unset();
// destroy the session 
session_destroy();
// Redirect the user to login page after logout.
header('Location: ../register/register.php');
?>
</body>
</html>