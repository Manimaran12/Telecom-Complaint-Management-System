<?php
session_start();
include'connection.php';
if(isset($_POST['login']))
{
	$email=$_POST['uname'];
	$password=$_POST['pass'];
	$sel="SELECT * FROM log WHERE email='$email' && password='$password'";
	$table=mysqli_query($link,$sel);
	$row=mysqli_num_rows($table);
	$usel="SELECT * FROM customer WHERE email='$email' && password='$password'";
	$utable=mysqli_query($link,$usel);
	$urow=mysqli_num_rows($utable);
if($row==1)
{
	$_SESSION['id']=$email;
	header("location:admin.php");
}
elseif($urow==1)
{
	$_SESSION['id']=$email;
	header("location:index.php");
}
else{
	echo "<script>alert('Invalid Email and Password')</script>";
            echo "<script>window.location='login.php'</script>";
}
}
?>