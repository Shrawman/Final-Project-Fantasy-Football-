<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <!-- <link rel="stylesheet" type="text/css" href="main.css" >--> 
</head>
<body>
<div>    
<h3>Create match</h3>
<form action ="match.php" name="match" method = "POST" onsubmit='selectplayers()'>
Team 1:
<select name="team1" id="team1">
            <option value="">Select One</option>
            <option value = "Arsenal">Arsenal</option>
            <option value = "Manchester City">Manchester City</option>
            <option value = "Manchester United">Manchester United</option>
            <option value = "Tottenham">Tottenham</option>
    </select>
    <br>

    Team 2:
    <select name="team2" id="team2">
    <option value="">Select One</option>
            <option value = "Arsenal">Arsenal</option>
            <option value = "Manchester City">Manchester City</option>
            <option value = "Manchester United">Manchester United</option>
            <option value = "Tottenham">Tottenham</option>
    </select>
    <br>

    Match time: 
    <input type="datetime-local" name="matchtime">
    <br>
    <input type="submit" value="Send">
</form>
 
<?php
include '../connect.php';

    $q="select * from matches";
    $res_user=mysqli_query($connect,$q);
    $row_users = mysqli_fetch_array($res_user);
    session_start();
    $_SESSION['matchid'] = $row_users['matchid'];
    $_SESSION['team1'] = $row_users['team1'];
    $_SESSION['team2'] = $row_users['team2'];

?>
</div>
</body>
</html>

