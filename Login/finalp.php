<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fantasy Football</title>
    <link rel="stylesheet" href="finalp.css">
    
</head>
<body>
    <Div class="container">
        <div class="navbar">
            <img src="../pic/Capture.PNG" alt="" class="logo">
            <nav>
                <ul>
                    <li><a href="#">Video</a></li>
                    <li><a href="#">Communities</a></li>
                    <li><a href="#">Help</a></li>
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
                <form action="authanticate.php" method="post" class="box">
                    <h1>Login Here</h1>
                    <input type="text" name="email" placeholder="Enter email" id="email">
                    <input type="password" name="password" placeholder="Enter Password" id="password">
                    <input type="submit" name="submit" value="login" onclick="validate()">
                    <div class="already-account">
                     Don't have an account?</div>
                    <a href="../register/register.php">Signup Now</a>
                </form>
            </div>
        </div>

    </Div>
    <div class="cookies">
        <p>
            We use cookie in the website to give you the best experiance on out site and show you relevant ads. To find out more, read out <a href="#" class="ck">privacy policy</a> and <a href="#" class="ck">cookie policy</a>
        </p>
        <br>
        <button class="cookie">
            Okay
        </button>
    </div>
    <script src="finalp.js"></script>
</body>
</html>