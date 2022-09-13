<?php
include'connection.php';
$mysqli= new mysqli('localhost','root','','cms');
?>
<html>
<center>
	<title>
	</title>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
</head>
		<title>
		registration form
	</title>
	<body>
	<div class="container-fluid " style="margin-top:70px;">
        <?php include'header.php';?></div>
        <style>
			<?php include'css_register.css';?>
            <?php include'main.css';?>
        </style>
        <div class="container-fluid navbar-fixed-top" style="margin-top:20px">
        <?php include'nav.php';?>
                </div>
		<form method="POST" name="register" onsubmit="return validateform()">
			<table border="0">
			<th colspan="3">NEW CUSTOMER</th>
				<tr>
					<td class="l"><label class="a1">CUSTOMER NAME</label></td>
					<td class="r"><input type="text"name="name"required placeholder="ENTER THE CUSTOMER NAME HERE" title="ENTER THE CUSTOMER NAME HERE"></td>
					
				</tr>
				<tr>
					<td class="l"><label class="a1">MOBILE NUMBER</label></td>
					<td class="r"><input type="text"name="mno" required placeholder="ENTER THE CUSTOMER MOBILE NUMBER HERE" title="ENTER THE CUSTOMER MOBILE NUMBER HERE"/></td>
					
				</tr>
				<tr>
					<td class="l"><label class="a1">E-MAIL ID</label></td>
					<td class="r"><input type="email"name="email"required placeholder="ENTER THE CUSTOMER EMAIL ID HERE" title="ENTER THE CUSTOMER EMAIL ID HERE"/></td>
					
				</tr>
				<tr>
					<td class="l"><label class="a1">ADDRESS</label></td>
					<td class="r"><input type="text"name="address"required placeholder="ENTER THE CUSTOMER ADDRESS HERE" title="ENTER THE CUSTOMER ADDRESS HERE"/></td>
					
				</tr>
				<tr>
					<td class="l"><label class="a1">HANDSET TYPE </label></td>
					<td class="r"><input type="radio"name="type"  value="2G"/>2G
					<input type="radio"name="type"  value="3G"/>3G
					<input type="radio"name="type" value="4G" title="ENTER THE TYPE OF DEVICE HERE">4G</td>
					
				</tr>
				<tr>
				 <td class="l"><label class="a1">SELECT NETWORK</label></td> 
				 <td>
					<select name="network">
						<option selected hidden value="">SELECT NETWORK</option>
						<option value="AIRTEL">AIRTEL</option>
						<option value="JIO">JIO</option>
						<option value="VI">VI</option>
						<option value="BSNL">BSNL</option>
                    </select>
				 <td>
				</tr>
				<tr>
					<td class="l"><label class="a1">PASSWORD</label></td>
					<td class="r"><input type="password"name="pass" required placeholder="ENTER THE PASSWORD HERE" title="ENTER THE PASSWWORD HERE"/></td>
					
				</tr>
				<tr>
					<td class="l"><label class="a1">CONFIRM PASSWORD</label></td>
					<td class="r"><input type="password"name="rpass" required placeholder="RETYPE THE PASSWORD HERE" title="RE TYPE THE PASSWORD HERE"/></td>
					
				</tr>
				<tr>
					<td colspan="1" align="right">
				<input type="submit"name="reguser" value="SUBMIT"/>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="reset" value="RESET"></td>
					<td colspan="1" align="center"><label class="a1">HAVE AN ACCOUNT&nbsp;&nbsp;</label><a href="login.php">CLICK HERE</A>&nbsp;&nbsp;<label class="a1">FOR LOGIN</label ></td>
				</tr>
			</table>
		</form>
	</body>
	</center>
	<script>
	
	function validateform(){  
	var name=document.register.name.value;  
	var password=document.register.pass.value;  
  
	if (name==null || name==""){  
	alert("Name can't be blank");  
	return false;  
	}
	else if(password.length<6){  
	alert("Password must be at least 6 characters long.");  
	return false;  
  }  
}  </script>
</html>
<?php
include'connection.php';
if(isset($_POST["reguser"])) 
{
	$name   =$_POST['name'];
$m_no     =$_POST['mno'];
$email  =$_POST['email'];
$add    =$_POST['address'];
$htype   =$_POST['type'];
$network =$_POST['network'];
$pass   =$_POST['pass'];
$rpass  =$_POST['rpass'];

  

	$sel="SELECT * FROM customer WHERE email='$email'";
	$match=mysqli_query($link,$sel) or die(mysqli_error($link));
	$match1=mysqli_num_rows($match);
	$z=date('E');
	$y=('11');
	
	
	$example=mysqli_query($link,"SELECT c_id FROM customer ");
	$ex=mysqli_num_rows($example);
	$invID = str_pad($ex,3,'0',STR_PAD_LEFT);
	$c_id=$z.$y.$invID;

	if($pass==$rpass){


	if ($match1 !== 0){
		echo '<script>alert("CUSTOMER ALREADY EXISTS")</script>';	
	}
	elseif ($match1 == 0)
	{
	
	mysqli_query($link,"insert into customer values('$c_id','$name','$m_no','$email','$add','$htype','$network','$pass')") or die(mysqli_error($link));
	echo '<script>alert("SUCCESSFULLY REGISTERED")</script>';	
	$_SESSION['id']=$email;
	
	}
	}
	else
	{
		echo '<script>alert("PASSWORD IS NOT MATCH")</script>';	
	}
}
?>