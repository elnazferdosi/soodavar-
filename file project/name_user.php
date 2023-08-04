<?php
    require 'connect.php';
    $query = $conn->query("SELECT * FROM `users` WHERE `id` = '$_SESSION[id]'") or die(mysqli_error());
    $fetch = $query->fetch_array();
    $username = $fetch['username'];
    $email = $fetch['email'];
?>