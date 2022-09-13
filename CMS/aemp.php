<div class="container-fluid">
    <div class="col">
        <div role="tabpanel ">
            <ul class="nav nav-tabs nav-justified  " role="tablist">
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#ecreate"  aria-controls="ecreate"  role="tab" data-toggle="tab"><b>CREATE  EMPLOYEE DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#eupdate"  aria-controls="eupdate"  role="tab" data-toggle="tab"><b>UPDATE  EMPLOYEE DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#edelete"  aria-controls="edelete"  role="tab" data-toggle="tab"><b>DELETE  EMPLOYEE DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#edisplay" aria-controls="edisplay" role="tab" data-toggle="tab"><b>DISPLAY EMPLOYEE DETAILS</b></a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="ecreate"> 
                    <form method="POST" name="register" action="admin.php">
                        <table border="0" class="table table" id="admint">
                            <tr class="row">
                                <td class="col"><label id="a1">Employee_name</label></td>
                                <td class="col"><input type="text"name="ename" placeholder="ENTER THE EMPLOYEE NAME HERE" title="ENTER THE EMPLOYEE NAME HERE"></td>

                                <td class="col"><label id="a1">Employee Mobile_number</label></td>
                                <td class="col"><input type="text"name="emno" placeholder="ENTER THE EMPLOYEE MOBILE NUMBER HERE" title="ENTER THE EMPLOYEE MOBILE NUMBER HERE"/></td>

                            </tr>
                            <tr class="row">
                                <td class="col"><label id="a1">Employee E-mail</label></td>
                                <td class="col"><input type="email"name="eemail" placeholder="ENTER THE EMPLOYEE EMAIL ID HERE" title="ENTER THE EMPLOYEE EMAIL ID HERE"/></td>


                                <td class="col"><label id="a1">Employee Address</label></td>
                                <td class="col"><input type="text"name="eaddress" placeholder="ENTER THE EMPLOYEE ADDRESS HERE" title="ENTER THE EMPLOYEE ADDRESS HERE"/></td>

                            </tr>
                            <tr class="row">
                                

                                <td class="col"><label id="a1">Password</label></td>
                                <td class="col"><input type="password"name="pass" placeholder="ENTER THE PASSWORD HERE" title="ENTER THE PASSWWORD HERE"/></td>

                            
                                <td class="col"><label id="a1">Confirm_password</label></td>
                                <td class="col"><input type="password"name="rpass" placeholder="RETYPE THE PASSWORD HERE" title="RE TYPE THE PASSWORD HERE"/></td>

                                </tr>
                            <tr class="row">
                                <td  class="col">
                                <input type="submit"name="regemp" class="btn btn-success btn-large" value="SUBMIT"/>
                                <td  class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="eupdate">
                    <form method="POST" name="update" action="admin.php">
                            <table border="0" class="table" id="admint">
                            <tr class="row">
                                <td class="col"><label id="a1">Employee_name</label></td>
                                <td class="col"><input type="text"name="ename" placeholder="ENTER THE EMPLOYEE NAME HERE" title="ENTER THE EMPLOYEE NAME HERE"></td>
                                <td class="col"><label id="a1">Employee_Id</label></td>
                                <td class="col">                                    
                                    <select NAME="e_id" style="width: 300px;height: 30px;">

                                        <?php
                                        $efirst= $mysqli->query("select E_id from employee");
                                            while($esecond=$efirst->fetch_assoc())
                                            {
                                                $e_id=$esecond['E_id'];
                                                echo"<option value='$e_id'>$e_id</option>";
                                            }
                                        ?>

                                        </select>
                                        </td>
                            </tr>
                            <tr class="row">
                                <td class="col"><label id="a1">Employee Mobile_number</label></td>
                                <td class="col"><input type="text"name="emno" placeholder="ENTER THE EMPLOYEE  MOBILE NUMBER HERE" title="ENTER THE EMPLOYEE MOBILE NUMBER HERE"/></td>

                           
                                <td class="col"><label id="a1">Employee E-mail</label></td>
                                <td class="col"><input type="email"name="eemail" placeholder="ENTER THE EMPLOYEE EMAIL ID HERE" title="ENTER THE EMPLOYEE EMAIL ID HERE"/></td>
                            
                            </tr>
                            <tr class="row">
                           

                                <td class="col"><label id="a1">Employee Address</label></td>
                                <td class="col"><input type="text"name="eaddress" placeholder="ENTER THE EMPLOYEE ADDRESS HERE" title="ENTER THE EMPLOYEE ADDRESS HERE"/></td>

                                

                            
                                <td class="col"><label id="a1">Password</label></td>
                                <td class="col"><input type="password"name="pass" placeholder="ENTER THE PASSWORD HERE" title="ENTER THE PASSWWORD HERE"/></td>
                                </tr>
                            <tr class="row">
                            
                                <td class="col"><label id="a1">Confirm_password</label></td>
                                <td class="col"><input type="password"name="rpass" placeholder="RETYPE THE PASSWORD HERE" title="RE TYPE THE PASSWORD HERE"/></td>

                           
                                <td  class="col">
                                <input type="submit"name="upemp" class="btn btn-success btn-large"/>
                                <td  class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="edelete">
                    <form method="POST" name="register">
                        <table border="0" class="table">
                                <tr class="row">
                                    <td class="col"><label class="a1">Employee id</label></td>
                                    <td class="col">
                                    <select NAME="e_id" style="width: 300px;height: 30px;">

                                        <?php
                                        $efirst= $mysqli->query("select E_id from employee");
                                            while($esecond=$efirst->fetch_assoc())
                                            {
                                                $e_id=$esecond['E_id'];
                                                echo"<option value='$e_id'>$e_id</option>";
                                            }
                                        ?>

                                        </select>
                                    </td>                                                         
                                </tr>
                                        
                                <tr class="row">
                                <td class="col">
                                <input type="submit"name="delemp" class="btn btn-success btn-large" value="SUBMIT"/>
                                <td class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                                </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="edisplay">
                    <table class="table table-hover"border="0">
                        <thead>
                        <tr class="row">
                        <TH class="col" align="center">ID</TH>
                        <TH class="col" align="center">NAME</TH>
                        <TH class="col" align="center">MOBILE NUMBER</TH>
                        <TH class="col" align="center">EMAIL</TH>
                        <TH class="col" align="center">ADDRESS</TH>
                        <TH class="col" align="center">PASSWORD</TH>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $res=mysqli_query($link,"SELECT E_id,name,phone,email,address,pass FROM employee order by E_id DESC");
                            while($row=mysqli_fetch_assoc($res))
                            {
                                echo"<tr class='row'>";
                                echo"<td class='col' >"; echo $row["E_id"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["name"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["phone"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["email"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["address"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["pass"]; echo"</td>";
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

if(isset($_POST["regemp"])) 
{
    $name   =$_POST['ename'];
    $m_no     =$_POST['emno'];
    $email  =$_POST['eemail'];
    $add    =$_POST['eaddress'];
    $pass   =$_POST['pass'];
    $rpass  =$_POST['rpass'];

	$esel="SELECT * FROM employee WHERE email='$email'";
	$ematch=mysqli_query($link,$esel) or die(mysqli_error($link));
	$ematch1=mysqli_num_rows($ematch);
	$z=('E');
	$y=('33');
	
	
	$example=mysqli_query($link,"SELECT E_id FROM employee ");
	$ex=mysqli_num_rows($example);
	$invID = str_pad($ex,3,'0',STR_PAD_LEFT);
	$e_id=$z.$y.$invID;

	if($pass==$rpass){


	if ($ematch1 !== 0){
		echo '<script>alert("EMPLOYEE ALREADY EXISTS")</script>';	
	}
	elseif ($ematch1 == 0)
	{
	
	mysqli_query($link,"insert into employee values('$e_id','$name','$m_no','$email','$add','$pass')") or die(mysqli_error($link));
	echo '<script>alert("SUCCESSFULLY REGISTERED")</script>';	
	
	}
	}
	else
	{
		echo '<script>alert("PASSWORD IS NOT MATCH")</script>';	
	}
    
}

elseif(isset($_POST["upemp"])) 
{

    $e_id  =$_POST['e_id'];
    $name   =$_POST['ename'];
    $m_no     =$_POST['emno'];
    $email  =$_POST['eemail'];
    $add    =$_POST['eaddress'];
    $pass   =$_POST['pass'];
    $rpass  =$_POST['rpass'];


if($pass==$rpass){

mysqli_query($link,"update employee set name='$name',email='$email',phone='$m_no',address='$add',pass='$pass' where E_id='$e_id' ")or die(mysqli_error($link));
echo '<script>alert("CUSTOMER UPDATED")</script>';	
}
elseif($pass!==$rpass)
{
    echo '<script>alert("CUSTOMER NOT CREATED ")</script>';	
    
}
}
elseif(isset($_POST["delemp"])) 
{
$e_id   = $_POST['e_id'];

mysqli_query($link,"delete from employee where E_id='$e_id' ")or die(mysqli_error($link));
echo '<script>alert("EMPLOYEE DELETED")</script>';	

}
?>
