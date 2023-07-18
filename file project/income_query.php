<?php
include_once "connect.php";

// if (isset($_GET['logout'])) {
//   unset($_SESSION['login']);
// }

// if (!isset($_SESSION['login'])) {
//   header("location: login.php");
// }


// add income
$message = null;
echo "<h1>i'm here</h1>";


function dataIsValid()
{
  echo "<h1>i'm here</h1>";
  // global $message;
  if (!isset($_POST['title']) || empty($_POST['title'])) {
    $message = "عنوان دریافتی را وارد کنید";
    return false;
  }
  if (!isset($_POST['type']) || empty($_POST['type'] == "0")) {
    $message = "نوع دریافتی را مشخص کنید";
    return false;
  }
  if (!isset($_POST['date']) || empty($_POST['date'])) {
    $message = "تاریخ دریافتی را وارد کنید";
    return false;
  }
  if (!isset($_POST['salary']) || empty($_POST['salary'])) {

    $message = "مبلغ دریافتی را وارد کنید";
    return false;
  }
  return true;
}
// mysqli_query($conn, "INSERT INTO income (`title` ,`type` ,`date` ,`salary`) VALUES ('hhh', '1','1212',1)");
if (isset($_POST['submit'])) {

  // if (dataIsValid()) {
    $title = $_POST['title'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $salary = $_POST['salary'];
    echo "<h1>i'm here too</h1>";
    $add = mysqli_query($conn, "INSERT INTO income (`title` ,`type` ,`date` ,`salary`) VALUES ('$title', '$type', '$date', $salary)");
    if ($add) {
      $message = "درآمد واردشده، با موفقیت ثبت شد";
    } else {
      $message = "خطا در افزودن درآمد!";
    }
  // }
}

// get all income
$query = mysqli_query($conn, "select * from  income");

if ($message) {
  echo '<script>alert("' . $message . '")</script>';
}
?>
