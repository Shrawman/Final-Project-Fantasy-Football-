<?php

$hostname="localhost"; 		//hostname
$username="root"; 			//username for database
$password=""; 				//database password
$dbname="project"; 		//database name
$connect=mysqli_connect($hostname,$username,$password,$dbname) or die("Error Connecting ".  mysqli_connect_error());

//login
$email=$_POST['aid'];
$password=$_POST['apass'];

$sql_users= " select * from admin where aid = '$email' && apass = '$password' ";

$res_users = mysqli_query($connect, $sql_users);

if(mysqli_num_rows($res_users) != 1)
{
    echo "<script> alert('No admin found with entered Email & password combination'); </script>";
    header("Refresh: 1; url=../register/register.php");
}

else
{
    $row_users = mysqli_fetch_array($res_users);
    session_start();
    $_SESSION['aid'] = $row_users['aid'];
    $_SESSION['apass'] = $row_users['apass'];

    header("Location: index.php");
}
?>




