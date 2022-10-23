<?php
if(isset ($_POST['username'])){

 $server = "localhost";
 $username = "root";
 $password = "";

 $con = mysqli_connect($server, $username, $password);

 if(!$con){
     die("connection failed due to" . mysqli_connect_error());
 }
//echo "Successfully connected";

$username = $_POST['username'];
$teamname = $_POST['teamname'];
$email = $_POST['email'];
$password = $_POST['password'];

  $sql = "INSERT INTO `project` . `register` (`username`, `teamname`, `email`, `password`,`points`,`rank`) VALUES
     ('$username', '$teamname', '$email', '$password',0,0);";
    // echo $sql;
    if($con-> query($sql)==true){
      
     
      //  echo "Thanks for submitting your form";
          $insert= true;
     header("Location: ../login/finalp.php");
    //exit();
    
        }
        else
        {
            echo "ERROR: $sql <br> $con->error";
        }
        $con->close();
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Account</title>
    <link rel="stylesheet" href="register.css">
</head>
<body>
    <Div class="container">
        <div class="navbar">
            <img src="../pic/Capture.PNG" alt="" class="logo">
            <nav>
                <ul>
                    <li><a href="register.php" target="_parent">Home</a></li>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Communities</a></li>
                    <li><a href="../admin/front">Admin</a></li>
                </ul>
            </nav>

        </div>
        <div class="border">

        </div>

        <div class="container2">
            <div class="col">
                <img src="../pic/ballkicking.png" alt="" class="boy">
            </div>
            <div class="login">
                
                <form action="register.php" method="post" class="box" name="registration_form" onsubmit="return validateform()">
                    <h1>Create Account</h1>
                    <input type="text" name="username" placeholder="Enter Username" id="username" required>
                    <input type="text" name="teamname" placeholder="Enter Your Team Name" id="teamname" required>
                    <input type="text" name="email" placeholder="Enter Email" id="email" required>
                    <input type="password" name="password" placeholder="Enter password" id="password" required>
                    <input type="password" name="repassword" placeholder="Re-enter password" id="repassword" required>
                    <input type="submit" name="" value="Create" onclick=validate()>
                    <div class="already-account">
                    Already have an account?</div>
                    <a href="../login/finalp.php">Login</a>
                </form>
                </form>  
            </div>
        </div>

    </Div>
    <script src=register.js></script>
</body>
</html>

