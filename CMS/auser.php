<div class="container-fluid">
    <div class="col">
        <div role="tabpanel ">
            <ul class="nav nav-tabs nav-justified  " role="tablist">
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#ucreate"  aria-controls="ucreate" role="tab" data-toggle="tab"><b>CREATE USER DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#uupdate"  aria-controls="uupdate" role="tab" data-toggle="tab"><b>UPDATE USER DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#udelete"  aria-controls="udelete" role="tab" data-toggle="tab"><b>DELETE USER DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#udisplay" aria-controls="udisplay" role="tab" data-toggle="tab"><b>DISPLAY USER DETAILS</b></a></li>
                </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="ucreate"> 
                    <form method="POST" name="register" action="admin.php">
                        <table border="0" class="table table" id="admint">
                            <tr class="row">
                                <td class="col"><label id="a1">Customer_name</label></td>
                                <td class="col"><input type="text"name="name" placeholder="ENTER THE CUSTOMER NAME HERE" title="ENTER THE CUSTOMER NAME HERE"></td>

                                <td class="col"><label id="a1">Mobile_number</label></td>
                                <td class="col"><input type="text"name="mno" placeholder="ENTER THE CUSTOMER MOBILE NUMBER HERE" title="ENTER THE CUSTOMER MOBILE NUMBER HERE"/></td>

                            </tr>
                            <tr class="row">
                                <td class="col"><label id="a1">E-mail</label></td>
                                <td class="col"><input type="email"name="email" placeholder="ENTER THE CUSTOMER EMAIL ID HERE" title="ENTER THE CUSTOMER EMAIL ID HERE"/></td>


                                <td class="col"><label id="a1">Address</label></td>
                                <td class="col"><input type="text"name="address" placeholder="ENTER THE CUSTOMER ADDRESS HERE" title="ENTER THE CUSTOMER ADDRESS HERE"/></td>

                            </tr>
                            <tr class="row">
                                <td class="col"><label id="a1">Handset_type </label></td>
                                <td class="col"><input type="radio"name="htype"  value="2g"/>2G
                                <input type="radio"name="htype"  value="3g"/>3G
                                <input type="radio"name="htype" value="4g" >4G</td>


                                <td class="col"><label id="a1">Password</label></td>
                                <td class="col"><input type="password"name="pass" placeholder="ENTER THE PASSWORD HERE" title="ENTER THE PASSWWORD HERE"/></td>

                            </tr>
                            <tr class="row">
                                <td class="col"><label id="a1">Confirm_password</label></td>
                                <td class="col"><input type="password"name="rpass" placeholder="RETYPE THE PASSWORD HERE" title="RE TYPE THE PASSWORD HERE"/></td>


                                <td  class="col">
                                <input type="submit"name="reguser" class="btn btn-success btn-large" value="SUBMIT"/>
                                <td  class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="uupdate">
                    <form method="POST" name="update" action="admin.php">
                            <table border="0" class="table" id="admint">
                            <tr class="row">
                                <td class="col"><label id="a1">Customer_name</label></td>
                                <td class="col"><input type="text"name="name" placeholder="ENTER THE CUSTOMER NAME HERE" title="ENTER THE CUSTOMER NAME HERE"></td>
                                <td class="col"><label id="a1">Customer_Id</label></td>
                                <td class="col">                                    
                                    <select NAME="c_id" style="width: 300px;height: 30px;">

                                        <?php
                                        $cid= $mysqli->query("select c_id from customer");
                                            while($row=$cid->fetch_assoc())
                                            {
                                                $c_id=$row['c_id'];
                                                echo"<option value='$c_id'>$c_id</option>";
                                            }
                                        ?>

                                        </select>
                                        </td>
                            </tr>
                            <tr class="row">
                                <td class="col"><label id="a1">Mobile_number</label></td>
                                <td class="col"><input type="text"name="mno" placeholder="ENTER THE CUSTOMER MOBILE NUMBER HERE" title="ENTER THE CUSTOMER MOBILE NUMBER HERE"/></td>

                           
                                <td class="col"><label id="a1">E-mail</label></td>
                                <td class="col"><input type="email"name="email" placeholder="ENTER THE CUSTOMER EMAIL ID HERE" title="ENTER THE CUSTOMER EMAIL ID HERE"/></td>
                            
                            </tr>
                            <tr class="row">
                           

                                <td class="col"><label id="a1">Address</label></td>
                                <td class="col"><input type="text"name="address" placeholder="ENTER THE CUSTOMER ADDRESS HERE" title="ENTER THE CUSTOMER ADDRESS HERE"/></td>

                                <td class="col"><label id="a1">Handset_type </label></td>
                                <td class="col"><input type="radio"name="htype"  value="2g"/>2G
                                <input type="radio"name="htype"  value="3g"/>3G
                                <input type="radio"name="htype" value="4g" title="ENTER THE TYPE OF DEVICE HERE">4G</td>

                            </tr>
                            <tr class="row">
                                <td class="col"><label id="a1">Password</label></td>
                                <td class="col"><input type="password"name="pass" placeholder="ENTER THE PASSWORD HERE" title="ENTER THE PASSWWORD HERE"/></td>

                            
                                <td class="col"><label id="a1">Confirm_password</label></td>
                                <td class="col"><input type="password"name="rpass" placeholder="RETYPE THE PASSWORD HERE" title="RE TYPE THE PASSWORD HERE"/></td>

                            </tr>
                            <tr class="row">
                                <td  class="col">
                                <input type="submit"name="upuser" class="btn btn-success btn-large"/>
                                <td  class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="udelete">
                    <form method="POST" name="register">
                        <table border="0" class="table">
                                <tr class="row">
                                    <td class="col"><label class="a1">User id</label></td>
                                    <td class="col">
                                    <select NAME="c_id" style="width: 300px;height: 30px;">

                                        <?php
                                        $cid= $mysqli->query("select c_id from customer");
                                            while($row=$cid->fetch_assoc())
                                            {
                                                $c_id=$row['c_id'];
                                                echo"<option value='$c_id'>$c_id</option>";
                                            }
                                        ?>

                                        </select>
                                    </td>                                                         
                                </tr>
                                        
                                <tr class="row">
                                <td class="col">
                                <input type="submit"name="deluser" class="btn btn-success btn-large" value="SUBMIT"/>
                                <td class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                                </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="udisplay">
                    <table class="table table-hover"border="0">
                        <thead>
                        <tr class="row">
                        <TH class="col" align="center">ID</TH>
                        <TH class="col" align="center">NAME</TH>
                        <TH class="col" align="center">MOBILE NUMBER</TH>
                        <TH class="col" align="center">EMAIL</TH>
                        <TH class="col" align="center">ADDRESS</TH>
                        <TH class="col" align="center">HANDSET TYPE</TH>
                        <TH class="col" align="center">NETWORK</TH>
                        <TH class="col" align="center">PASSWORD</TH>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $res=mysqli_query($link,"SELECT c_id,name,m_no,email,address,h_type,network,password FROM customer");
                            while($row=mysqli_fetch_array($res))
                            {
                                echo"<tr class='row'>";
                                echo"<td class='col' >"; echo $row["c_id"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["name"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["m_no"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["email"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["address"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["h_type"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["network"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["password"]; echo"</td>";
                                        echo"</tr>";
                            }
                            ?>
                            </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?php

if(isset($_POST["reguser"])) 
{
    $name   =$_POST['name'];
    $m_no     =$_POST['mno'];
    $email  =$_POST['email'];
    $add    =$_POST['address'];
    $htype   =$_POST['htype'];
    $network =$_POST['network'];
    $pass   =$_POST['pass'];
    $rpass  =$_POST['rpass'];

	$sel="SELECT * FROM customer WHERE email='$email'";
	$match=mysqli_query($link,$sel) or die(mysqli_error($link));
	$match1=mysqli_num_rows($match);
	$z=('A');
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

elseif(isset($_POST["upuser"])) 
{

    $c_id  =$_POST['c_id'];
    $name   =$_POST['name'];
    $m_no     =$_POST['mno'];
    $email  =$_POST['email'];
    $add    =$_POST['address'];
    $htype   =$_POST['htype'];
    $network =$_POST['network'];
    $pass   =$_POST['pass'];
    $rpass  =$_POST['rpass'];

if($pass==$rpass){

mysqli_query($link,"update customer set name='$name',m_no='$m_no',email='$email',address='$add',h_type='$htype',network='$network',password='$pass' where c_id='$c_id' ")or die(mysqli_error($link));
echo '<script>alert("CUSTOMER UPDATED")</script>';	
}
elseif($pass!==$rpass)
{
    echo '<script>alert("CUSTOMER NOT CREATED ")</script>';	
    
}
}
elseif(isset($_POST["deluser"])) 
{
$c_id   = $_POST['c_id'];

mysqli_query($link,"delete from customer where c_id='$c_id' ")or die(mysqli_error($link));
echo '<script>alert("CUSTOMER DELETED")</script>';	

}
?>
