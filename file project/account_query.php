<?php
include_once "connect.php";

// if (isset($_GET['logout'])) {
//   unset($_SESSION['login']);
// }

// if (!isset($_SESSION['login'])) {
//   header("location: login.php");
// }


// add profile
$message = null;

function dataIsValid()
{
  global $message;
  if (!isset($_POST['first'])) {
    return false;
  }
  if (!isset($_POST['last'])) {
    return false;
  }
  if (!isset($_POST['job'])) {
    return false;
  }
  if (!isset($_POST['numbers'])) {
    return false;
  }
  if (!isset($_POST['address'])) {
    return false;
  }
  return true;
}

if (isset($_POST['save'])) {

  if (dataIsValid()) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $job = $_POST['job'];
    $numbers = $_POST['numbers'];
    $address = $_POST['address'];
    $add = mysqli_query($conn, "INSERT INTO profiles (`first`, `last`, `job`, `numbers`, `address`) VALUES ('$first', '$last', '$job', '$numbers', '$address')");
    if ($add) {
      $message = "پروفایل کاربری با موفقیت ذخیره شد";
    } else {
      $message = "خطا در ذخیره پروفایل کاربری !";
    }
  }
}

// edit profile
function editDataIsValid()
{
  global $message;
  if (!isset($_POST['last'])) {
    return false;
  }
  if (!isset($_POST['first'])) {
    return false;
  }
  if (!isset($_POST['job'])) {
    return false;
  }
  if (!isset($_POST['numbers'])) {
    return false;
  }
  if (!isset($_POST['address'])) {
    return false;
  }

  return true;
}

if (isset($_POST['edit'])) {

  if (editDataIsValid()) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $job = $_POST['job'];
    $numbers = $_POST['numbers'];
    $address = $_POST['address'];
    $id = $_POST['id'];
    $edit = mysqli_query($conn,"UPDATE profiles SET first='$first', last='$last', job='$job', numbers = '$numbers', address = '$address'  WHERE id='$id'");
    if ($edit) {
      $message = "پروفایل کاربری با موفقیت ویرایش شد";
    } else {
      $message = "خطا در ویرایش پروفایل کاربری !";
    }
  }       
}


// get all progfile
$query = mysqli_query($conn, "select * from  profiles");

if ($message) {
  echo '<script>alert("' . $message . '")</script>';
}
?>