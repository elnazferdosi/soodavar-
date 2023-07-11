<?php 
session_start();
if(!ISSET($_SESSION['income_id'])){
header("location:dashboards-income.php");
}