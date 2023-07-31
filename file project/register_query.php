<?php
include_once "connect.php";

if (isset($_SESSION['login'])) {
  header("location: index.php");
}

$message = null;
$username = null;
$email = null;
$password = null;
$confpassword = null;

function dataIsValid()
{
  global $message, $email, $conn;
  if (!isset($_POST['username']) || empty($_POST['username'])) {
    $message = "نام کاربری را وارد کنید";
    return false;
  }
  if (!isset($_POST['email']) || empty($_POST['email'])) {
    $message = "ایمیل را وارد کنید";
    return false;
  }
  if (!isset($_POST['password']) || empty($_POST['password'])) {
    $message = "رمزعبور را وارد کنید";
    return false;
  }
  if (!isset($_POST['confpassword']) || empty($_POST['confpassword'])) {
    $message = "رمزعبور را تکرار کنید";
    return false;
  }
  if ($_POST['password'] != $_POST['confpassword']) {
    $message = "رمزعبور با تکرار آن یکسان نیست";
    return false;
  }
  if (!isset($_POST['terms'])) {
    $message = "لطفا با قوانین و شرایط سوداور موافقت نمایید";
    return false;
  }

  $sql = "SELECT * FROM users WHERE email = '$email'";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0) {
    $message = "حساب کاربری وارد شده، تکراری است";
    return false;
  }
  return true;
}

if (isset($_POST['email'])) {

  // user data
  $username = $_POST['username'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $confpassword = $_POST['confpassword'];

  if (dataIsValid()) {
    $sql = "INSERT INTO users (username,email,password) VALUES
    ('$username','$email','$password')";

    if (mysqli_query($conn, $sql)) {
      $message = "حساب کاربری با موفقیت ایجاد شد";

      //clear all inputs
      $username = null;
      $email = null;
      $password = null;
      $confpassword = null;

    } else {
      $message = "خطا در ایجاد حساب کاربری!";
    }
  }
}

if ($message) {
  echo '<script>alert("' . $message . '")</script>';
}
?>
