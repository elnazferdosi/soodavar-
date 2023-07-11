<?php
if(ISSET($_POST['add_bills'])){
$bills_title = $_POST['bills_title'];
$bills_type = $_POST['bills_type'];
$bills_date = $_POST['bills_date'];
$bills_salary = $_POST['bills_salary'];

$conn->query("INSERT INTO `bills` (bills_title, bills_type, bills_date, bills_salary) VALUES('$bills_title', '$bills_type', '$bills_date', '$bills_salary')") or die(mysqli_error());

$query = $conn->query("SELECT * FROM `bills` WHERE `bills_title` = '$bills_title' && `bills_type` = '$bills_type' && `bills_date` = '$bills_date' && `bills_salary` = '$bills_salary' ") or die(mysqli_error());
		
$fetch = $query->fetch_array();
		
}	
