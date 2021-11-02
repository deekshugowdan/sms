<?php
include '../assets/db/db.php';
session_start();
$cemail=$_POST['email'];
$q="select * from students where EMAIL='$cemail'";
$query=mysqli_query($con,$q);
$row=mysqli_num_rows($query);
if($row==1){
    $num=mysqli_fetch_assoc($query);
    $name=$num['NAME'];
    $email=$num['EMAIL'];
    $otp=rand(1000,10000);
    $_SESSION['otp']=$otp;
    $toemail =$email;
    $subject = "OTP to Reset Password";
    $body ="Hi, $name your otp to reset password is $otp please Do not share this otp with anyone for further queries contact admin";
    $headers ="From:STUDENT MANAGEMENT SYSTEM";
    mail($toemail, $subject, $body, $headers);
    echo '1';
}
else{
    echo '2';
}

?>