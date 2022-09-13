<?php
include'connection.php';
$mysqli= new mysqli('localhost','root','','cms');
session_start();
$a=('')
?>
<!DOCTYPE HTML>
<html>
<center>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
       
</head>
	<body>
	<div class="container-fluid  fixed-top" style="margin-top:50px;">
        <?php include'header.php';?></div>
        <style>
            <?php include'main.css';?>
        </style>
        <div class="container-fluid navbar-fixed-top" style="margin-top:50px">
                </div>
		<form method="POST"class="responsive"style="margin-top:50px" action="login_2.php"id="loginf"><br>
			<div class="row1">
				<div class="column">
					<table id="logint" align="center">
						<tr>
							<td>
							<img src="/CMS/img/login_logo.jfif" alt=""height='200' width='170' class="logo">
							</img>
						</td>
						</tr>	
					</table>
				</div>
				<div class="column1">
				<table border="0" id="logint">
					<th colspan="3" class="th1">
						LOGIN
					</th>
					<tr class="row1">
						<td class="c1">
							<label>USER NAME</label>
						</td>
						<td class="c2">
						:
						</td>
						<td class="c3">
						<input type="email"name="uname"required
							placeholder="Enter the username here" title="Enter the user name">
						</td>
					</tr>
					<tr class="row1">
						<td class="c1">
							<label>PASSWORD</label>
						</td>
						<td class="c2">
						:
						</td>
						<td class="c3">
						<input type="password"name="pass"required
							placeholder="Enter password here" title="Enter the password">
						</td>
					</tr>
					<tr class="">
						<td colspan="3" class="submit">
						<input type="submit" class="submit1"name="login">
						</td>
					</tr>
					<tr class="r1">
						<td class="c1"colspan="3"align="right">
						NEW USER REGISTER <a href="register.php" id="a1" >HERE</a>...&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						</td>
					</tr>
				</table>
				</div>
			</div>
		</form>
		<script src="js/bootstrap.min.js">
        <script src="js/jquery.min.js">
	</body>
</center>
</html>

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