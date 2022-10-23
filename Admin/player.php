<?php
include '../connect.php';

  $sel = $_POST['checkbox'];
  //echo $sel[0]
  for($i=0;$i<sizeof($sel);$i++){
      $id=$sel[$i];  
      $q="SELECT * FROM players where pid=$id";
      $res=mysqli_query($connect,$q);
      $row = mysqli_fetch_array($res);
      $name=$row['pname'];
      $country=$row['pclub'];
      $type=$row['ptype']; 
      $qy="INSERT INTO playingplayers (ppid,playerid,ppname,ppclub,pptype,goal,assist,pppoints) VALUES(NULL,$id,'$name','$country', '$type',0,0,0)";
      mysqli_query($connect,$qy);
}
 

$q1="SELECT * FROM playingplayers ";
$result = mysqli_query($connect,$q1);          
$no=1;

$run=array('r1','r2','r3','r4','r5','r6','r7','r8','r9','r10','r11','r12','r13','r14','r15','r16');
$wick=array('w1','w2','w3','w4','w5','w6','w7','w8','w9','w10','w11','w12','w13','w14','w15','w16');
$n=0;

echo "Selected players:";
echo "<form method='post' id='selectform' action='result.php'>";
echo "<table border='1'>
<tr>
<th>No</th>
<th>Name</th>
<th>Club</th>
<th>Type</th>
<th>Goals</th>
<th>Assists</th>
</tr>";
 
while($row = mysqli_fetch_array($result))
  { 
  echo "<tr>";
  echo "<td>" . $no++ . "</td>";
  echo "<td>" . $row['ppname'] . "</td>";
  echo "<td>" . $row['ppclub'] . "</td>";
  echo "<td>" . $row['pptype'] . "</td>";
  echo "<td><input type='text' name=".$run[$n]." value='0'></td>";
  echo "<td><input type='text' name=".$wick[$n]." value='0'></td>"; 
  echo "</tr>";
  $n++;
  }
  
echo "</table>";
echo "<input type='submit' class='buttons'>";
echo "</form>";
     
