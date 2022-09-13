<div class="container-fluid">
    <div class="col">
        <div role="tabpanel ">
            <ul class="nav nav-tabs nav-justified  " role="tablist">
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#anncreate"  aria-controls="anncreate"  role="tab" data-toggle="tab"><b>CREATE  ANNOUNCEMENT DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#annupdate"  aria-controls="annupdate"  role="tab" data-toggle="tab"><b>UPDATE  ANNOUNCEMENT DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#anndelete"  aria-controls="anndelete"  role="tab" data-toggle="tab"><b>DELETE  ANNOUNCEMENT DETAILS</b></a></li>
                <li id="tabli" role="presentation"><a id="tablink"href data-target="#anndisplay" aria-controls="anndisplay" role="tab" data-toggle="tab"><b>DISPLAY ANNOUNCEMENT DETAILS</b></a></li>
                </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane active" id="anncreate"> 
                    <form method="POST" action="admin.php">
                        <table border="0" class="table table" id="admint">
                            <tr class="row">
                                <td class="col"><label id="a1">ANNOUNCEMENT_CONTENT</label></td>
                                <td class="col"><input type="text"name="annname" placeholder="ENTER THE ANNOUNCEMENT CONTENT HERE" title="ENTER THE ANNOUNCEMENT CONTENT HERE"></td>

                                
                            </tr>
                            <tr class="row">
                                

                                <td class="col"><label id="a1">URL</label></td>
                                <td class="col"><input type="text"name="url" placeholder="ENTER THE ANNOUNCEMENT ADDRESS HERE" title="ENTER THE ANNOUNCEMENT ADDRESS HERE"/></td>

                            </tr>
                            
                            <tr class="row">
                                
                                <td  class="col">
                                <input type="submit"name="regann" class="btn btn-success btn-large" value="SUBMIT"/></td>
                                <td  class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="annupdate">
                    <form method="POST" action="admin.php">
                            <table border="0" class="table" id="admint">
                            <tr class="row">
                                 <td class="col"><label id="a1">Announcement_Id</label></td>
                                <td class="col">                                    
                                    <select NAME="announce_id" style="width: 300px;height: 30px;">

                                        <?php
                                        $ann1_id= $mysqli->query("select announce_id from announce");
                                            while($ann2=$ann1_id->fetch_assoc())
                                            {
                                                $ann3_id=$ann2['announce_id'];
                                                echo"<option value='$ann3_id'>$ann3_id</option>";
                                            }
                                        ?>

                                        </select>
                                        </td>
                            </tr>
                            <tr class="row">
                            <td class="col"><label id="a1">Announcement content</label></td>
                                <td class="col"><input type="text"name="annname" placeholder="ENTER THE ANNOUNCEMENT CONTENT HERE" title="ENTER THE CUSTOMER NAME HERE"></td>
                               
                            </tr>
                            <tr class="row">
                           

                                <td class="col"><label id="a1">Description</label></td>
                                <td class="col"><input type="text"name="url" placeholder="ENTER THE ANNOUNCEMENT ADDRESS HERE" title="ENTER THE CUSTOMER ADDRESS HERE"/></td>

                            </tr>
                            
                            <tr class="row">
                                <td  class="col">
                                <input type="submit"name="upann" class="btn btn-success btn-large"/></td>
                                <td  class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                            </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="anndelete">
                    <form method="POST" name="register">
                        <table border="0" class="table">
                                <tr class="row">
                                    <td class="col"><label class="a1">User id</label></td>
                                    <td class="col">
                                    <select NAME="announce_id" style="width: 300px;height: 30px;">

                                        <?php
                                        $ann1_id= $mysqli->query("select announce_id from announce");
                                            while($ann2=$ann1_id->fetch_assoc())
                                            {
                                                $ann3_id=$ann2['announce_id'];
                                                echo"<option value='$ann3_id'>$ann3_id</option>";
                                            }
                                        ?>

                                        </select>
                                    </td>                                                         
                                </tr>
                                        
                                <tr class="row">
                                <td class="col">
                                <input type="submit"name="delann" class="btn btn-success btn-large" value="SUBMIT"/>
                                <td class="col">
                                <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                                </tr>
                        </table>
                    </form>
                </div>
                <div role="tabpanel" class="tab-pane" id="anndisplay">
                    <table class="table table-hover"border="0">
                        <thead>
                        <tr class="row">
                        <TH class="col" align="center">COMPLAINT ID</TH>
                        <TH class="col" align="center">COMPLAINT NAME</TH>
                        <TH class="col" align="center">DESCRIPTION</TH>
                        
                        
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $disann=mysqli_query($link,"SELECT announce_id,type,content FROM announce");
                            while($row=mysqli_fetch_array($disann))
                            {
                                echo"<tr class='row'>";
                                echo"<td class='col' >"; echo $row["announce_id"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["type"]; echo"</td>";
                                echo"<td class='col' >"; echo $row["content"]; echo"</td>";
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
if(isset($_POST["regann"])) 
{
$name   =$_POST['annname'];
$add    =$_POST['url'];


  

	
	$z=('AN');
	$y=('66');
	
	
	$annex=mysqli_query($link,"SELECT announce_id FROM announce ");
	$anne=mysqli_num_rows($annex);
	$invID = str_pad($anne,3,'0',STR_PAD_LEFT);
	$announce_id=$z.$y.$invID;

	
	mysqli_query($link,"insert into announce values('$announce_id','$name','$add')") or die(mysqli_error($link));
	echo '<script>alert("SUCCESSFULLY REGISTERED")</script>';	
	
	}
	


elseif(isset($_POST["upann"])) 
{
    $ann_id=$_POST['announce_id'];
    $name   =$_POST['annname'];
    $add    =$_POST['url'];

mysqli_query($link,"update customer set type='$name',content='$add' where announce_id='$ann3_id' ")or die(mysqli_error($link));
echo '<script>alert("ANNOUNCEMENT UPDATED")</script>';	
}


elseif(isset($_POST["delann"])) 
{
$ann_id   = $_POST['announce_id'];

mysqli_query($link,"delete from announce where announce_id='$ann_id' ")or die(mysqli_error($link));
echo '<script>alert("ANNOUNCEMENT DELETED")</script>';	

}
?>
