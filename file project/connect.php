<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
          die("خطا در اتصال به دیتابیس: " . $conn->connect_error);
      }
?>