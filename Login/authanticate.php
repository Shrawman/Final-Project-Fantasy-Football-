<?php

$hostname="localhost"; 		//hostname
$username="root"; 			//username for database
$password=""; 				//database password
$dbname="project"; 		//database name
$connect=mysqli_connect($hostname,$username,$password,$dbname) or die("Error Connecting ".  mysqli_connect_error());

//login
$email=$_POST['email'];
$password=$_POST['password'];

$sql_users= " select * from register where email = '$email' && password = '$password' ";

$res_users = mysqli_query($connect, $sql_users);
if(mysqli_num_rows($res_users) != 1)
{
    echo "<script> alert('No user found with entered Email & password combination'); </script>";
    header("Refresh: 1; url=../register/register.php");
}

else
{
    $row_users = mysqli_fetch_array($res_users);
    session_start();
    $_SESSION['userid'] = $row_users['userid'];
    $_SESSION['username'] = $row_users['username'];
    $_SESSION['email'] = $row_users['email'];
    $_SESSION['points'] = $row_users['points'];
    // $_SESSION['teamname'] = $row_users['teamname'];


    //ranking
    $q="SELECT * FROM register ORDER BY points DESC";
    $result = mysqli_query($connect,$q);         
    $rank=0;            
    while($row = mysqli_fetch_array($result))
    {
    ++$rank;    
    $id=$row['userid'];
    $qy="UPDATE register SET rank='$rank' where userid='$id'";
    mysqli_query($connect,$qy);
    }
    $_SESSION['rank'] = $row_users['rank'];

    header("Location: ../dash/index.php");
}
?>


