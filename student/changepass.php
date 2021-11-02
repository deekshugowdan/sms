<?php
include '../assets/db/db.php';
session_start();
$email=mysqli_escape_string($con,$_POST['email']);
$otp=mysqli_escape_string($con,$_POST['otp']);
$cpass1=mysqli_escape_string($con,md5($_POST['npass']));
$cpass2=mysqli_escape_string($con,md5($_POST['cnpass']));
if (empty($otp) || $otp !=$_SESSION['otp']) {
    echo "1";
  }

else{
    if($cpass2!=$cpass1)
    {
        echo '2';
    }
    else{
    $q="update students set PASS='$cpass2' where EMAIL='$email'";
    $query=mysqli_query($con,$q);
    echo '3';
    }
    //echo 'otp verified';

}









?>