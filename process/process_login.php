<?php 
session_start();
include_once("connection.php");

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM `login` WHERE `login_email` = '$email' AND `login_password`= '$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows ($result) > 0 ){
	$_SESSION['email'] = $email;
	$_SESSION['password'] = $password;
	header('location:../dashboard.php');
}
	else{
  		echo"<script language='javascript' type='text/javascript'>alert('Email and / or password incorrect');window.location.href='../login.php';</script>";
   	}
?>