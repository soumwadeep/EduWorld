<?php
session_start();
//header('location:login.php');
$con = mysqli_connect('localhost','root');

if($con){
	echo"User Registration Successful!Now You Can Sign In With Your Details!";
	header('location:success.php');
}else{
	echo"Sorry We Were Unable To Register You!";
}

mysqli_select_db($con,'sessionpractical');

$name = $_POST['user'];
$pass = $_POST['password'];

$q = "select * from signin where name = '$name' && password = '$pass'";

$result = mysqli_query($con,$q);
$num = mysqli_num_rows($result);

if($num == 1){
	echo "User Already Exists.Retry With Your Credentials!";
	header('location:regerror.html');
}else{
	$qy = " insert into signin(name , password) values ('$name' , '$pass') ";
	mysqli_query($con,$qy);
}
?>