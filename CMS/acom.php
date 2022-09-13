<div class="container-fluid">
    <div class="col">
        <div role="tabpanel ">
            <ul class="nav nav-tabs nav-justified  " role="tablist">
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#comcreate"  aria-controls="comcreate"  role="tab" data-toggle="tab"><b>CREATE  COMPLAINT DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#comupdate"  aria-controls="comupdate"  role="tab" data-toggle="tab"><b>UPDATE  COMPLAINT DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#comdelete"  aria-controls="comdelete"  role="tab" data-toggle="tab"><b>DELETE  COMPLAINT DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#comdisplay" aria-controls="comdisplay" role="tab" data-toggle="tab"><b>DISPLAY COMPLAINT DETAILS</b></a></li>
                </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="comcreate"> 
                    <form method="POST" action="admin.php">
                        <table border="0" class="table table" id="admint">
                            <tr class="row">
                                <td class="col"><label id="a1">Complaint_name</label></td>
                                <td class="col"><input type="text"name="comname" placeholder="ENTER THE COMPLAINT NAME HERE" title="ENTER THE CUSTOMER NAME HERE"></td>

                                
                            </tr>
                            <tr class="row">
                                

                                <td class="col"><label id="a1">Description</label></td>
                                <td class="col"><input type="text"name="desc" placeholder="ENTER THE COMPLAINT DESCRIPTION HERE" title="ENTER THE CUSTOMER ADDRESS HERE"/></td>

                            </tr>
                            <tr class="row">
                                

                                <td class="col"><label id="a1">Department</label></td>
                                <td class="col"><input type="text"name="dept" placeholder="ENTER THE COMPLAINT DEPARTMENT HERE" title="ENTER THE CUSTOMER ADDRESS HERE"/></td>

                            </tr>
                           
                            <tr class="row">
                                
                                <td  class="col">
                                <input type="submit"name="regcomp" class="btn btn-success btn-large" value="SUBMIT"/></td>
                                <td  class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="comupdate">
                    <form method="POST" action="admin.php">
                            <table border="0" class="table" id="admint">
                            <tr class="row">
                                 <td class="col"><label id="a1">Complaint_Id</label></td>
                                <td class="col">                                    
                                    <select NAME="com_id" style="width: 300px;height: 30px;">

                                        <?php
                                        $com1_id= $mysqli->query("select com_id from net_com");
                                            while($com2=$com1_id->fetch_assoc())
                                            {
                                                $com3_id=$com2['com_id'];
                                                echo"<option value='$com3_id'>$com3_id</option>";
                                            }
                                        ?>

                                        </select>
                                        </td>
                            </tr>
                            <tr class="row">
                            <td class="col"><label id="a1">Complaint_name</label></td>
                                <td class="col"><input type="text"name="comname" placeholder="ENTER THE CUSTOMER NAME HERE" title="ENTER THE CUSTOMER NAME HERE"></td>
                               
                            </tr>
                            <tr class="row">
                           

                                <td class="col"><label id="a1">Description</label></td>
                                <td class="col"><input type="text"name="desc" placeholder="ENTER THE CUSTOMER ADDRESS HERE" title="ENTER THE CUSTOMER ADDRESS HERE"/></td>

                            </tr>
                            <tr class="row">
                                

                                <td class="col"><label id="a1">Department</label></td>
                                <td class="col"><input type="text"name="dept" placeholder="ENTER THE CUSTOMER ADDRESS HERE" title="ENTER THE CUSTOMER ADDRESS HERE"/></td>

                            </tr>
                            <tr class="row">
                                <td  class="col">
                                <input type="submit"name="upcomp" class="btn btn-success btn-large"/></td>
                                <td  class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="comdelete">
                    <form method="POST" name="register">
                        <table border="0" class="table">
                                <tr class="row">
                                    <td class="col"><label class="a1">User id</label></td>
                                    <td class="col">
                                    <select NAME="com_id" style="width: 300px;height: 30px;">

                                        <?php
                                        $com1_id= $mysqli->query("select com_id from net_com");
                                            while($com2=$com1_id->fetch_assoc())
                                            {
                                                $com3_id=$com2['com_id'];
                                                echo"<option value='$com3_id'>$com3_id</option>";
                                            }
                                        ?>

                                        </select>
                                    </td>                                                         
                                </tr>
                                        
                                <tr class="row">
                                <td class="col">
                                <input type="submit"name="delcomp" class="btn btn-success btn-large" value="SUBMIT"/>
                                <td class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                                </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="comdisplay">
                    <table class="table table-hover"border="0">
                        <thead>
                        <tr class="row">
                        <TH class="col" align="center">COMPLAINT ID</TH>
                        <TH class="col" align="center">COMPLAINT NAME</TH>
                        <TH class="col" align="center">DESCRIPTION</TH>
                        <TH class="col" align="center">DEPARTMENT</TH>
                        
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $discom=mysqli_query($link,"SELECT com_id,name,description,department FROM net_com");
                            while($row=mysqli_fetch_array($discom))
                            {
                                echo"<tr class='row'>";
                                echo"<td class='col' >"; echo $row["com_id"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["name"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["description"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["department"]; echo"</td>";
                               
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
if(isset($_POST["regcomp"])) 
{
$name   =$_POST['comname'];
$desc     =$_POST['desc'];
$dept  =$_POST['dept'];

  

	$comsel="SELECT * FROM net_com WHERE name='$name'";
	$commatch=mysqli_query($link,$comsel) or die(mysqli_error($link));
	$comm1=mysqli_num_rows($commatch);
	$z=('COM');
	$y=('99');
	
	
	$comex=mysqli_query($link,"SELECT com_id FROM net_com ");
	$come=mysqli_num_rows($comex);
	$invID = str_pad($come,3,'0',STR_PAD_LEFT);
	$com_id=$z.$y.$invID;

	

	if ($comm1 !== 0){
		echo '<script>alert("COMPLAINT ALREADY EXISTS")</script>';	
	}
	elseif ($comm1 == 0)
	{
	
	mysqli_query($link,"insert into net_com values('$com_id','$name','$desc','$dept')") or die(mysqli_error($link));
	echo '<script>alert("SUCCESSFULLY REGISTERED")</script>';	
	
	}
	}


elseif(isset($_POST["upcomp"])) 
{
$name   =$_POST['comname'];
$com_id    =$_POST['com_id'];
$desc  =$_POST['desc'];
$dept    =$_POST['dept'];

mysqli_query($link,"update customer set name='$name',description='$desc',department='$dept'where com_id='$com_id' ")or die(mysqli_error($link));
echo '<script>alert("COMPLAINT UPDATED")</script>';	
}


elseif(isset($_POST["delcomp"])) 
{
$com_id   = $_POST['com_id'];

mysqli_query($link,"delete from net_com where com_id='$com_id' ")or die(mysqli_error($link));
echo '<script>alert("COMPLAINT DELETED")</script>';	

}
?>
