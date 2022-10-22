<?php
include '../connect.php';

session_start();
 $uid=$_SESSION['userid'];

  $b = $_POST['gk'];
  $w = $_POST['df'];
  $a = $_POST['mid'];
  $bo = $_POST['fwd'];
  
$total=array();
$total=array_merge($b,$a,$w,$bo);

$tot=implode(", ", $total);
$len=sizeof($total);

echo '<br>';
if($len<8){
    echo "Don not select less than 8 players";
    header("Refresh:1; url=player.php");
}
elseif($len>8){
    echo "Do not select more than 8 players";
    header("Refresh:1; url=player.php");
}

elseif(sizeof($w)<2){
        echo "Select at least 2 defenders.";
        header("Refresh:1; url=player.php");
}

elseif(sizeof($a)<2){
            echo "Select at least 2 midfielders";
            header("Refresh:1; url=player.php");   
}


else{
    $q1="select * from scorecard where id='$uid'";
    $result=mysqli_query($connect,$q1);
    $num=mysqli_num_rows($result);
    if($num == 1){
        $q="UPDATE scorecard SET selplay='$tot' WHERE id='$uid'";
        if(mysqli_query($connect,$q)){
            echo "success";}
        header("Refresh:1; url=player.php");
      }

    else{
        $q="INSERT INTO scorecard (sid,id,matchid,selplay, points) VALUES(NULL,$uid,1,'$tot',0)";
        if(mysqli_query($connect,$q)){
            echo "success";}
        header("Refresh:1; url=player.php");
    }    
}
?>