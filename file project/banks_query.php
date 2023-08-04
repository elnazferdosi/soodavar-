<?php
include_once "connect.php";

// if (isset($_GET['logout'])) {
//   unset($_SESSION['login']);
// }

// if (!isset($_SESSION['login'])) {
//   header("location: login.php");
// }


// add banks
$message = null;

function dataIsValid()
{
  global $message;
  if (!isset($_POST['numbers'])) {
    return false;
  }
  if (!isset($_POST['owners'])) {
    return false;
  }
  if (!isset($_POST['exp'])) {
    return false;
  }
  if (!isset($_POST['cvv'])) {
    return false;
  }
  if (!isset($_POST['primarys'])) {
    return false;
  }
  return true;
}

if (isset($_POST['save'])) {

  if (dataIsValid()) {
    $numbers = $_POST['numbers'];
    $owners = $_POST['owners'];
    $exp = $_POST['exp'];
    $cvv = $_POST['cvv'];
    $cvv = $_POST['cvv'];
    $primarys = $_POST['primarys'];
    $add = mysqli_query($conn, "INSERT INTO banks (`numbers`, `owners`, `exp`, `cvv`, `primarys`) VALUES ('$numbers', '$owners', '$exp', '$cvv', '$primarys')");
    if ($add) {
      $message = "حساب بانکی با موفقیت ثبت شد";
    } else {
      $message = "خطا در افزودن حساب بانکی !";
    }
  }
}

// edit banks

function editDataIsValid()
{
  global $message;
  if (!isset($_POST['numbers'])) {
    return false;
  }
  if (!isset($_POST['owners'])) {
    return false;
  }
  if (!isset($_POST['exp'])) {
    return false;
  }
  if (!isset($_POST['cvv'])) {
    return false;
  }
  return true;
}

if (isset($_POST['edit'])) {

  if (editDataIsValid()) {
    $numbers = $_POST['numbers'];
    $owners = $_POST['owners'];
    $exp = $_POST['exp'];
    $cvv = $_POST['cvv'];
    $id = $_POST['id'];
    $edit = mysqli_query($conn,"UPDATE banks SET numbers='$numbers', owners='$owners', exp='$exp', cvv = '$cvv' WHERE id='$id'");
    if ($edit) {
      $message = "حساب بانکی با موفقیت ویرایش شد";
    } else {
      $message = "خطا در ویرایش حساب بانکی !";
    }
  }       
}

//delete banks
if (isset($_GET['delete'])) {
  $id = $_GET['delete'];


  //delete banks message 
  $sql = "DELETE FROM banks WHERE id='$id'";

  if ($conn->query($sql) === TRUE) {
    $message = "حساب بانکی با موفقیت حذف شد";
  } else {
    $message = "خطا در حذف حساب بانکی !";
  }
}

// get all banks
$query = mysqli_query($conn, "select * from  banks");

if ($message) {
  echo '<script>alert("' . $message . '")</script>';
}
?>
