<?php
include '../connect.php';


$t="TRUNCATE TABLE playingplayers";
mysqli_query($connect,$t);

$t1="TRUNCATE TABLE scorecard";
mysqli_query($connect,$t1);


$team1=$_POST["team1"];
$team2=$_POST["team2"];
$data = $_POST["matchtime"];
$dbInsertDate = date('Y-m-d H:i:s', strtotime($data));


$q="select * from matches where team1='$team1' && team2='$team2' && datetime='$dbInsertDate'";

$result=mysqli_query($connect,$q);

$num=mysqli_num_rows($result);

if($num == 1){
  echo "Cannot set";
}
else{
    //$qy="insert into matches(matchid,team1,team2,datetime) values (1,'$team1','$team2','$dbInsertDate')";
    $qy="update  matches SET team1='$team1',team2='$team2',datetime='$dbInsertDate' where matchid=1";
    mysqli_query($connect,$qy);
    //echo "<script>alert ('success');</script>";
     //header('Location: index.php');

    
$q="SELECT * FROM players where pclub='$team1' || pclub='$team2'";
$result = mysqli_query($connect,$q);          
$no=1;
echo "Select players:";
echo "<form method='post' id='selectform' action='player.php'>";
echo "<table border='1'>
<tr>
<th>No</th>
<th>Name</th>
<th>Club</th>
<th>Type</th>
<th>select</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
  {
   $id=$row['pid']; 
  echo "<tr>";
  echo "<td>" . $no++ . "</td>";
  echo "<td>" . $row['pname'] . "</td>";
  echo "<td>" . $row['pclub'] . "</td>";
  echo "<td>" . $row['ptype'] . "</td>";
  echo "<td>
   <input type='checkbox' name='checkbox[]' value='$id'> 
   </td>";
  echo "</tr>";
  }
echo "</table>";
echo "<input type='submit' class='buttons'>";
echo "</form>";
     
}
?>

