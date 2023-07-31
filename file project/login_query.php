<?php
include_once "connect.php";

if(ISSET ($_POST['login'])){
$email = $_POST['email'];
$password = $_POST['password'];
$query = $conn->query("SELECT * FROM `users` WHERE `email` = '$email' && `password` = '$password'") or die(mysqli_error());

$fetch = $query->fetch_array();
$row = $query->num_rows;
if($row > 0){
session_start();
$_SESSION['id'] = $fetch['id'];
header('location:index.php');
}
else{
echo "<center> <labe style = 'color:red;'> نام کاربری یا رمزعبور اشتباه است  </label> </center>";
}
}
?>