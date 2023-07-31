<?php
include_once "connect.php";

// if (isset($_GET['logout'])) {
//   unset($_SESSION['login']);
// }

// if (!isset($_SESSION['login'])) {
//   header("location: login.php");
// }


// add bills
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
  if (!isset($_POST['banks'])) {
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
    $banks = $_POST['banks'];
    $date = $_POST['date'];
    $salary = $_POST['salary'];
    $add = mysqli_query($conn, "INSERT INTO bills (`title`, `type`, `banks`, `date`, `salary`) VALUES ('$title', '$type', '$banks', '$date', '$salary')");
    if ($add) {
      $message = "قبض با موفقیت ثبت شد";
    } else {
      $message = "خطا در افزودن قبض !";
    }
  }
}

// edit bills
function editDataIsValid()
{
  global $message;
  if (!isset($_POST['title'])) {
    return false;
  }
  if (!isset($_POST['type'])) {
    return false;
  }
  if (!isset($_POST['banks'])) {
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
    $banks = $_POST['banks'];
    $date = $_POST['date'];
    $salary = $_POST['salary'];
    $id = $_POST['id'];
    $edit = mysqli_query($conn,"UPDATE bills SET title='$title', type='$type', banks='$banks', date = '$date', salary = '$salary'  WHERE id='$id'");
    if ($edit) {
      $message = "قبض موردنظر با موفقیت ویرایش شد";
    } else {
      $message = "خطا در ویرایش قبض !";
    }
  }       
}

//delete bills
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];


  //delete bills message 
  $sql = "DELETE FROM bills WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    $message = "قبض موردنظر با موفقیت حذف شد";
  } else {
    $message = "خطا در حذف قبض !";
  }
}

// get all bills
$query = mysqli_query($conn, "select * from  bills");

if ($message) {
  echo '<script>alert("' . $message . '")</script>';
}
?>
