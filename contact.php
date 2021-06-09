<?php

if(isset($_POST['submit'])) {
    $name=$_POST['name'];
    $emailFrom=$_POST['email'];
    $message=$_POST['message'];
    $subject= "New From Submission";



$email_To= "islam.sa3idzak@gmail.com";
$headers= "From: ".$emailFrom;
$txt = "you have received email from".$name.",\n\n".$message;

mail($email_To,$subject,$txt,$headers);
header("Location: index.php?mailsent");

}


?>