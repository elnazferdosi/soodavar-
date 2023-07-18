<?php
include_once "connect.php";

if (isset($_GET['logout'])) {
  unset($_SESSION['login']);
}

if (!isset($_SESSION['login'])) {
  header("location: login.php");
}

if ($message) {
    echo '<script>alert("' . $message . '")</script>';
}
?>