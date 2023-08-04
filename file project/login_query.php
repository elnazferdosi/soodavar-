<?php
include_once "connect.php";


if (isset($_SESSION['login'])) {
  header("location: index.php");
}


$message = null;
$email = null;
$password = null;
$username = null;

function dataIsValid()
{
  global $message, $email, $conn,$username;

  if (!isset($_POST['email']) || empty($_POST['email'])) {
    $message = "ایمیل را وارد کنید";
    return false;
  }

  if (!isset($_POST['password']) || empty($_POST['password'])) {
    $message = "رمزعبور را وارد کنید";
    return false;
  }



  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) == 0) {
    $message = "این ایمیل هنوز ثبت نام نکرده است";
    return false;
  }

  $row = mysqli_fetch_assoc($result);
  $hashPass = $row["password"];
  $username = $row["username"];

  if (!password_verify($_POST['password'], $hashPass)) {
    $message = " اطلاعات شما باهم مطابقت ندارند ";
    return false;
  }

  return true;
}

if (isset($_POST['email'])) {

  // user data
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (dataIsValid()) {
    $_SESSION['login'] = $username;
    header("location: index.php");
  }
}

?>