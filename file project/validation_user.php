<?php 
    session_start();
    if(!ISSET($_SESSION['id'])){
    header("location:login.php");
    }