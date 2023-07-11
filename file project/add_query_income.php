<?php
if(ISSET($_POST['add_income'])){
$income_title = $_POST['income_title'];
$income_type = $_POST['income_type'];
$income_date = $_POST['income_date'];
$income_salary = $_POST['income_salary'];

$conn->query("INSERT INTO `income` (income_title, income_type, income_date, income_salary) VALUES('$income_title', '$income_type', '$income_date', '$income_salary')") or die(mysqli_error());

$query = $conn->query("SELECT * FROM `income` WHERE `income_title` = '$income_title' && `income_type` = '$income_type' && `income_date` = '$income_date' && `income_salary` = '$income_salary' ") or die(mysqli_error());
		
$fetch = $query->fetch_array();
		
}	
