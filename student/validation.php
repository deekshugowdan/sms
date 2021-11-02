<?php
include '../assets/db/db.php';
session_start();
$email=mysqli_escape_string($con,$_POST['username']);
$pass=mysqli_escape_string($con,md5($_POST['pass']));
$captcha=$_POST['captcha'];

if (empty($captcha) || $captcha !=$_SESSION['captcha']) {
    echo "1";
  } else {
  
    $q = "select * from students where EMAIL='$email' && PASS='$pass'";
    $query = mysqli_query($con,$q);
    $num = mysqli_num_rows($query);
    if ($num != 1){
  
      echo "2";
    } else {
    //  $row = mysqli_fetch_assoc($query);
    //  $_SESSION['email'] = $row['EMAIL'];
    //  $_SESSION['name'] = $row['NAME'];
    //  $_SESSION['phone'] = $row['PHONE'];
    //  $_SESSION['stid'] = $row['STUDENTID'];
    //  $_SESSION['useravtar']=$row['USERAVTAR'];
    //  $_SESSION['gender']=$row['GENDER'];
    //  $_SESSION['bgroup']=$row['BGROUP'];
    //  $_SESSION['branch']=$row['BRANCH'];
    //  $_SESSION['fname']=$row['FATHER'];
    //  $_SESSION['mname']=$row['MOTHER'];
  
     echo "3";
  
   }
  
  
  }
  