<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Account
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="index.css" >
</head>

<?php
include '../connect.php';
session_start();
if(!$_SESSION['username']){
    echo "<script> alert('Please login first') </script>";
    header('Location: ../login/finalp.php');
}
?>

<body>
<div class='container'>    
<div class='main'>

    <div class='tabs'>
        <a href="index.php">Home</a>
        <a href="player.php">PlayArea</a>
        <a href="account.php">Account</a>
        <a href="logout.php">Logout</a>
    </div>

    <div class='playarea'>
        Current match :
        <?php
            $q="select * from matches where matchid=1";
            $result=mysqli_query($connect,$q);
            $row_users = mysqli_fetch_array($result);
            
        $_SESSION['matchid'] = $row_users['matchid'];
        $team1=$_SESSION['team1'] = $row_users['team1'];
        $team2=$_SESSION['team2'] = $row_users['team2'];
        $_SESSION['datetime'] = $row_users['datetime'];

        $userid=$_SESSION['userid'];
        $q1="SELECT * from scorecard WHERE id='$userid'";
        $result1=mysqli_query($connect,$q1);
        $row_users1 = mysqli_fetch_array($result1);
        //$_SESSION['points']=$row_users1['points'];

        echo $team1 ," vs ", $team2;
        echo "<br>";
        ?>
        

        <div class='time'>
            <br>
        Timings:  <p id='timer'></p></div>
        
        <hr class='sep1'>

        <div class='cont'>
       
        <div class='side1'>

        <form method='post' action='select.php'>
          
        <div class='goalkeeper'>
        <?php 
            $q1="select * from playingplayers where (ppclub='$team1' && pptype='Goalkepper') || (ppclub='$team2' && pptype='Goalkepper')";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            
            echo "<h3 style='text-align:center'> Make a team of 8 Players</h3> <hr>";
            echo "<br> <br>";
            echo "<b><u>Playing Players List:</b></u>";
            echo "<br> <br>";
            echo "<b>Goalkeepers</b>(Select atleast 1):";
            echo"<br>";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>    <th>Name</th>
            <th>Club</th>
            <th class='checkbox-td'>Select</th>";
            echo "</tr>";
 
            while($row = mysqli_fetch_array($result1))
            {
                $id=$row['playerid']; 
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppclub'] . "</td>";
             echo "<td class='checkbox-td'>
                <input type='checkbox' name='gk[]' value='$id'> 
                </td>";
             echo "</tr>";
            }
            echo "</table>";
        ?>

</div>
        <div class='defender'>
        <?php 
            $q1="select * from playingplayers where (ppclub='$team1' && pptype='Defender') || (ppclub='$team2' && pptype='Defender')";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            echo "<b>Defenders</b>(Select atleast 2):";
            echo"<br>";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Club</th>";
                echo "
            <th class='checkbox-td'>Select</th>";
            echo "</tr>";
 
            while($row = mysqli_fetch_array($result1))
             {
                $id=$row['playerid']; 
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppclub'] . "</td>";
             echo "<td class='checkbox-td'>
                <input type='checkbox' name='df[]' value='$id'> 
                 </td>";
             echo "</tr>";
            }
            echo "</table>";
        ?>

</div>

        <div class='midfielder'>
        <?php 
            $q1="select * from playingplayers where (ppclub='$team1' && pptype='Midfielder') || (ppclub='$team2' && pptype='Midfielder')";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            echo "<b>Midfielders</b>(Select atleast 2):";
            echo"<br>";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Club</th>";
                echo "
            <th class='checkbox-td'>Select</th>";
            echo "</tr>";
 
            while($row = mysqli_fetch_array($result1))
             {
                $id=$row['playerid']; 
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppclub'] . "</td>";
             echo "<td class='checkbox-td'>
                <input type='checkbox' name='mid[]' value='$id'> 
                 </td>";
             echo "</tr>";
            }
            echo "</table>";
        ?>
</div>

<div class='forward'>
        <?php 
            $q1="select * from playingplayers where (ppclub='$team1' && pptype='Forward') || (ppclub='$team2' && pptype='Forward')";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            echo "<b>Forwards</b>(Select atleast 1):";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Club</th>";
                echo "
            <th class='checkbox-td'>Select</th>";
            echo "</tr>";
 
            while($row = mysqli_fetch_array($result1))
             {
                $id=$row['playerid']; 
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppclub'] . "</td>";
             echo "<td class='checkbox-td'>
                <input type='checkbox' name='fwd[]' value='$id'> 
                 </td>";
             echo "</tr>";
            }
            echo "</table>";
            echo "<hr>"
        ?>
        <input type='submit'  class='submit_but'>
        </form>
        <!-- Done -->
        
        
        </div>

        <div class='side2'>
        <div class='your11'>
        <?php 

            $id=$_SESSION['userid']; 
            //deferer
            $sss="select * from scorecard where id='$id'";
            $res=mysqli_query($connect,$sss);
            $row1 = mysqli_fetch_array($res);
            $pp=$row1['selplay'];
            $ppp=explode(",",$pp);
            


            $q1="select * from playingplayers where playerid in ('".implode("', '", $ppp)."' )";
            $result1=mysqli_query($connect,$q1);
            $no=1;
            $poin=0;
            echo "Your Fantasy team:";
            echo "<table border='1' class='ptab'>
            <tr>
            <th>No</th>
            <th>Name</th>
            <th>Club</th>
            <th>Position</th>
            </tr>";
 
            while($row = mysqli_fetch_array($result1))
             {
             echo "<tr>";
             echo "<td>" . $no++ . "</td>";
             echo "<td>" . $row['ppname'] . "</td>";
             echo "<td>" . $row['ppclub'] . "</td>";
             echo "<td>" . $row['pptype'] . "</td>";
             echo "</tr>";
             $_SESSION['points']=$poin += (int)$row['pppoints'];
            }
            echo "</table>";
            
            $q2="select * from register where userid='$id'";
            $result2=mysqli_query($connect,$q2);
            $row2 = mysqli_fetch_array($result2);

            $mainsco=(int)$row2['points']+$poin;

            $q3="UPDATE register SET points='$mainsco' WHERE userid='$id'";
            mysqli_query($connect,$q3);


        ?>
        </div>
        
        <div class='usscore'>
        &emsp; <br>&emsp;Points earned:<h1 class='ptext'><?php echo $_SESSION['points']; ?></h1>
        </div>

        </div>

        </div>
    </div>    
    
</div>
</div>
</body>

<script>
    var countDownDate = new Date("<?php echo $_SESSION['datetime']; ?>").getTime();
// Update the count down every 1 second
var x = setInterval(function() {

  // Get todays date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element "
  document.getElementById("timer").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.querySelectorAll('.submit_but, .checkbox-td').forEach(element => {
        element.style.visibility = 'hidden';
    });
    document.getElementById("timer").innerHTML = "Started";
  }
}, 1000);
</script>    

</html>
        