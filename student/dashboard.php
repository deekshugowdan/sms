<?php
session_start();
include "../assets/db/db.php";
if (empty($_SESSION['email']) || $_SESSION['email'] == '') {
    header('location:index.php');
    die();
} else {
    $query = "select * from students";
    $result = mysqli_query($con, $query);
    $num = mysqli_fetch_assoc($result);
    $qy = mysqli_fetch_array($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>WELCOME</h2>
    
</body>
</html>