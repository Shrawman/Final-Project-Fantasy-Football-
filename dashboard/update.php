<?php 
include '../connect.php';

session_start();
$id=$_SESSION['userid'];

$uname=$_POST["username"];
$email=$_POST["email"];
$password=$_POST["password"];
$teamname=$_POST["teamname"];

$q="select * from users where username='$uname' && email='$email'";

$result=mysqli_query($connect,$q);

$num=mysqli_num_rows($result);

if($num == 1){
  echo " Duplicate data";
  header("Refresh:1; url=account.php");
}
else{
    $q1="UPDATE register SET username='$uname',password='$password',teamname='$teamname' WHERE userid='$id'";
    
    if(mysqli_query($connect,$q1)){
        echo "success";}
    $_SESSION['username']=$uname;
    header('location:account.php');
}
?>
