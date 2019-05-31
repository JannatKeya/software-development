<?php
include("config.php");
extract($_REQUEST);
if(isset($sub))
 {
$name=$_REQUEST['t1'];
$phone=$_REQUEST['t2'];
$email=$_REQUEST['t3'];
$subj=$_REQUEST['t4'];
$mesg=$_REQUEST['t5'];
 if(mysqli_query($conn,"insert into fdbk values('$name','$phone','$email','$subj','$mesg')"))
    {
	  echo "<font face='Lucida Handwriting' color='red' size='+1'>Message sent successfully</font>";
    }
 
 }
?>
