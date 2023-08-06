<?php
include_once "connect.php";

// if (isset($_GET['logout'])) {
//   unset($_SESSION['login']);
// }

// if (!isset($_SESSION['login'])) {
//   header("location: login.php");
// }


// add hamlonaghl
$message = null;

function dataIsValid()
{
  global $message;
  if (!isset($_POST['title'])) {
    return false;
  }
  if (!isset($_POST['type'])) {
    return false;
  }
  if (!isset($_POST['date'])) {
    return false;
  }
  if (!isset($_POST['salary'])) {
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
    $add = mysqli_query($conn, "INSERT INTO hamlonaghl (`title` ,`type` ,`date` ,`salary`) VALUES ('$title', '$type', '$date', '$salary')");
    if ($add) {
      $message = "خرجی با موفقیت ثبت شد";
    } else {
      $message = "خطا در افزودن خرجی !";
    }
  }
}

// edit daily
function editDataIsValid()
{
  global $message;
  if (!isset($_POST['title'])) {
    return false;
  }
  if (!isset($_POST['type'])) {
    return false;
  }
  if (!isset($_POST['date'])) {
    return false;
  }
  if (!isset($_POST['salary'])) {
    return false;
  }

  return true;
}

if (isset($_POST['edit'])) {

  if (editDataIsValid()) {
    $title = $_POST['title'];
    $type = $_POST['type'];
    $date = $_POST['date'];
    $salary = $_POST['salary'];
    $id = $_POST['id'];
    $edit = mysqli_query($conn,"UPDATE hamlonaghl SET title='$title', type='$type' , date = '$date', salary = '$salary'  WHERE id='$id'  ");
    if ($edit) {
      $message = "خرجی موردنظر با موفقیت ویرایش شد";
    } else {
      $message = "خطا در ویرایش خرجی !";
    }
  }       
}

//delete daily
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];


  //delete daily message 
  $sql = "DELETE FROM hamlonaghl WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    $message = "خرجی موردنظر با موفقیت حذف شد";
  } else {
    $message = "خطا در حذف خرجی !";
  }
}

// get all daily
$query = mysqli_query($conn, "select * from  hamlonaghl");

if ($message) {
  echo '<script>alert("' . $message . '")</script>';
}
?>
