<?php
include_once "connect.php";

// if (isset($_GET['logout'])) {
//   unset($_SESSION['login']);
// }

// if (!isset($_SESSION['login'])) {
//   header("location: login.php");
// }


// add product
$message = null;

function dataIsValid()
{
  global $message;
  if (!isset($_POST['title']) || empty($_POST['title'])) {
    $message = " نوع ذزیافتی را وارد کنید";
    return false;
  }
  if (!isset($_POST['type']) || $_POST['type'] == "0") {
    $message = "  نوع دریافتی را وارد کنید";
    return false;
  }
  if (!isset($_POST['date']) || empty($_POST['date'])) {
    $message = "  تاریخ دریافتی را وارد کنید";
    return false;
  }
  if (!isset($_POST['salary']) || empty($_POST['salary'])) {

    $message = "   مبلغ دریافتی را وارد کنید";
    return false;
  }
  return true;
}

if (isset($_POST['save'])) {

  if (dataIsValid()) {
    $title = $_POST['title'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $salary = $_POST['salary'];
    $add = mysqli_query($conn, "INSERT INTO income (`title` ,`type` ,`date` ,`salary`) VALUES ('$title', '$type', '$date', '$salary')");
    if ($add) {
      $message = "درآمد با موفقیت ثبت شد";
    } else {
      $message = "     خطا در افزودن درآمد!";
    }
  }
}

// get all income
$query = mysqli_query($conn, "select * from  income");

if ($message) {
  echo '<script>alert("' . $message . '")</script>';
}
?>
