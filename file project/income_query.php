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
    $add = mysqli_query($conn, "INSERT INTO income (`title` ,`type` ,`date` ,`salary`) VALUES ('$title', '$type', '$date', '$salary')");
    if ($add) {
      $message = "درآمد با موفقیت ثبت شد";
    } else {
      $message = "خطا در افزودن درآمد !";
    }
  }
}

// edit income
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
    $edit = mysqli_query($conn,"UPDATE income SET title='$title', type='$type' , date = '$date', salary = '$salary'  WHERE id='$id'  ");
    if ($edit) {
      $message = "درآمد موردنظر با موفقیت ویرایش شد";
    } else {
      $message = "خطا در ویرایش درآمد !";
    }
  }       
}

//delete income
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];


  //delete income message 
  $sql = "DELETE FROM income WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    $message = "درآمد موردنظر با موفقیت حذف شد";
  } else {
    $message = "خطا در حذف درآمد !";
  }
}

// get all income
$query = mysqli_query($conn, "select * from  income");

if ($message) {
  echo '<script>alert("' . $message . '")</script>';
}
?>
