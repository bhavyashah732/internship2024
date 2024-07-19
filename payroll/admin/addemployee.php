<?php
// database connection code
if(isset($_POST['empid']))
{
//$con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','payroll_ms');

// get the post records

$txtName = $_POST['empid'];
$txtEmail = $_POST['firstName'];
$txtPhone = $_POST['lastName'];
$txtMessage = $_POST['email'];
$txtMessage = $_POST['department'];
$txtMessage = $_POST['gender'];
$txtMessage = $_POST['dob'];
$txtMessage = $_POST['mobileno'];
$txtMessage = $_POST['country'];
$txtMessage = $_POST['address'];
$txtMessage = $_POST['city'];
$txtMessage = $_POST['password'];
$txtMessage = $_POST['confirmpassword'];

// database insert SQL code
$sql = "INSERT INTO `tbl_employees` (`empid`, `firstName`, `lastName`, `email`, `department`,`gender`,`dob`,`mobileno`,`country`,`address`,`city`,`password`,`confirmpassword`,) VALUES ('0', '$empid', '$firstName', '$lastName', '$email', '$department', '$gender', '$dob', '$mobileno', '$country', '$address', '$city', '$password', '$confirmpassword')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Contact Records Inserted";
}
}
else
{
	echo "Are you a genuine visitor?";
	
}
?>