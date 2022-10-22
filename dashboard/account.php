<?php
$hostname="localhost"; 		//hostname
$username="root"; 			//username for database
$password=""; 				//database password
$dbname="project"; 		//database name
$connect=mysqli_connect($hostname,$username,$password,$dbname) or die("Error Connecting ".  mysqli_connect_error());

session_start();
if(!$_SESSION['email']){
    echo "<script> alert('Please login first') </script>";
    header('Location: ../register/register.php');
}
?>

<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css" >
    <script src="../register/register.js"></script>
</head>

<body>
<div class='container'>    
<div class='main'>
    <div class='tabs'>
        <a href="index.php">Home</a>
        <a href="player.php">PlayArea</a>
        <a href="account.php">Account</a>
        <a href="logout.php">Logout</a>
    </div>
    <div class='accounts'>
       <p>Edit your account: </p> 
        <hr>

        <?php 
        $id=$_SESSION['userid'];
        $q="SELECT * from register where userid=$id";
        $res=mysqli_query($connect,$q);
        $row=mysqli_fetch_array($res);
        $name=$row['username'];
        $email=$row['email'];
        $teamname=$row['teamname'];
        ?>
        
        <div class='accountupdate'>
        <form action="update.php" method="post" name="registration_form" onsubmit="return validateform()">
                    <label for="username"><b>Username:</b></label><br>
                    <input type="text" placeholder="<?php echo $name; ?>" name="username" required>

                    <br>

                    <label for="teamname"><b>Team Name:</b></label><br>
                    <input type="text" placeholder="<?php echo $teamname; ?>" name="teamname" required>
                    
                    <br>

                    <label for="password"><b>Password:</b></label><br>
                    <input type="password" placeholder="Enter Password" name="password" required>
                    <br>

                    <label for="repassword"><b>Repeat Password:</b></label><br>
                    <input type="password" placeholder="Repeat Password" name="repassword" required>
                    <br>

                    <div class="clearfix">
                      <button type="submit" class="signupbtn" name="submit_register">Update</button>
                    </div>
                  </div>
                </form>    
    </div>
</div>
</div>
</body>
</html>
