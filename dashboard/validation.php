<?php
session_start();
//header('location:login.php');
$con = mysqli_connect('localhost','root');

if($con){
	echo"Login Successful!";
}else{
	echo"Sorry We Were Unable To Logged You In!";
}

mysqli_select_db($con,'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
	$_SESSION['username'] = $name;
	header('location:studentdashboard.php');
}else{
	header('location:loginerror.html');
}
?>