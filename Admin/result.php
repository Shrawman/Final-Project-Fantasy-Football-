<?php
include '../connect.php';

$run=array('r1','r2','r3','r4','r5','r6','r7','r8','r9','r10','r11','r12','r13','r14','r15','r16');
$wick=array('w1','w2','w3','w4','w5','w6','w7','w8','w9','w10','w11','w12','w13','w14','w15','w16');

$runs=array();
$wicket=array();


for($i=0;$i<16;$i++){
    $ru=$run[$i];
    $wi=$wick[$i];
    $runs[$i]=$_POST[$ru];
    $wicket[$i]=$_POST[$wi];
}


$q="SELECT * FROM playingplayers";
$res=mysqli_query($connect,$q);

$o=0;
$id=1;
while($row = mysqli_fetch_array($res)){  
    $poi=(int)$runs[$o]*4+(int)$wicket[$o]*3;
    $q1="UPDATE playingplayers SET goal='$runs[$o]',assist='$wicket[$o]',pppoints='$poi' WHERE ppid='$id'";
    if(mysqli_query($connect,$q1)){
        echo "success"; echo '<br>';}
    $o += 1;
    $id += 1;     
}
?>
