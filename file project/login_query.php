<?php
include_once "connect.php";

if (isset($_SESSION['login'])) {
  header("Location: index.php");
}

$message = null;
$username = null;
$email = null;
$password = null;

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
    $message = "حساب کاربری موردنظر یافت نشد";
    return false;
  }

  $row = mysqli_fetch_assoc($result);
  $hashPassword = $row["password"];
  $username = $row["username"];

  if (!password_verify($_POST['password'], $hashPassword)) {
    $message =  "اطلاعات وارد شده، صحیح نیست";
    return false;
  } else {
    header("Location: index.php");
  }
}

if (isset($_POST['email'])) {

  // user data
  $email = $_POST['email'];
  $password = $_POST['password'];

  if (dataIsValid()) {
    $_SESSION['login'] = $username;
    header("Location: index.php");
  }
}

if ($message) {
  echo '<script>alert("' . $message . '")</script>';
}
?>
