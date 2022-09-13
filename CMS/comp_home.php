<?php
include'connection.php';
$mysqli= new mysqli('localhost','root','','cms');
session_start();
if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
else
{
    $a=$_SESSION['id'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="uft-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script>if(window.history.replaceState)
            {
                window.history.replaceState(null,null,window.location.href)

            }
            </script>
</head>
<body>
<div class="container-fluid " style="margin-top:70px;">
        <?php include'header.php';?></div>
        <style>
            <?php include'main.css';?>
        </style>
        <div class="container-fluid navbar-fixed-top" style="margin-top:20px">
        <?php include'nav.php';?>
                </div>
               
                    <div class="container-fluid">
                        <div class="col-md-12 col-sd12 col-ld-12">
                            <div role="tabpanel"class="row">
                                <ul class="nav nav-tabs nav-justified " role="tablist">
                                    <li id="tabli" role="presentation"><a id="tablink"href data-target="#network" aria-controls="network" role="tab" data-toggle="tab"><b>NETWORK</b></a></li>
                                    <li id="tabli"role="presentation"><a id="tablink" href data-target="#deduction" aria-controls="deduction" role="tab" data-toggle="tab"><b>DEDUCTION</b></a></li>
                                    <li id="tabli" role="presentation"><a id="tablink"href data-target="#validity" aria-controls="validity" role="tab" data-toggle="tab"><b>VALIDITY</b></a></li>
                                    <li id="tabli"role="presentation"><a id="tablink" href data-target="#valad" aria-controls="valad" role="tab" data-toggle="tab"><b>VALUE ADDED SERVICES</b></a></li>
                                    <li id="tabli"role="presentation"><a id="tablink" href data-target="#others" aria-controls="others" role="tab" data-toggle="tab"><b>OTHERS</b></a></li>                                   
                                </ul>
                                <div class="tab-content col-md-8 col-sd-8 col-ld-8" style="overflow:hidden;margin-left:250px;margin-top:50px;" >
                                     <div role="tabpanel"style="text-align:left;width:100%; margin-left:20px;" class="tab-pane active" id="network"> 
                                        <form class="form" method="POST" action="comp_home.php" style=" width:80%;">
                                            <table class="table table-hover"border="0">
                                                <thead class="row">
                                                <tr class="row">
                                                <TH class="col" style="text-align:center;">SELECT</TH>
                                                <TH class="col" align="center">NAME OF COMPLAINT</TH>
                                                <TH class="col" align="center">DESCRIPTION</TH>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $net=('network');
                                                    $cres=mysqli_query($link,"SELECT com_id,name,description,department FROM net_com where department='$net'");
                                                    while($row=mysqli_fetch_assoc($cres))

                                                    {
                                                        $com_id=$row['com_id'];

                                                        echo"<tr class='row'>";
                                                        echo"<td class='col' align='center'>"; echo "<input type='checkbox'name='rcomid'value='$com_id'>"; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['name']; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['description']; echo"</td>";
                                                        echo"</tr>";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <div class="row" style="text-align:center;">
                                                <input type="submit" class="btn btn-large btn-success" 
                                                style="margin-bottom:20px;float:center;" name="ncraise"value="RAISE COMPLAINT">
                                                </div>
                                            </form>
                                     </div>
                                     <div role="tabpanel"style="text-align:left;width:100%; margin-left:20px;" class="tab-pane " id="deduction"> 
                                        <form class="form" method="POST" action="comp_home.php" style=" width:80%;">
                                            <table class="table table-hover"border="0">
                                                <thead class="row">
                                                <tr class="row">
                                                <TH class="col" style="text-align:center;">SELECT</TH>
                                                <TH class="col" align="center">NAME OF COMPLAINT</TH>
                                                <TH class="col" align="center">DESCRIPTION</TH>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $ded=('deduction');
                                                    $cres=mysqli_query($link,"SELECT com_id,name,description,department FROM net_com where department='$ded'");
                                                    while($row=mysqli_fetch_assoc($cres))

                                                    {
                                                        $com_id=$row['com_id'];

                                                        echo"<tr class='row'>";
                                                        echo"<td class='col' align='center'>"; echo "<input type='checkbox'name='rcomid'value='$com_id'>"; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['name']; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['description']; echo"</td>";
                                                        echo"</tr>";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <div class="row" style="text-align:center;">
                                                <input type="submit" class="btn btn-large btn-success" 
                                                style="margin-bottom:20px;float:center;" name="dcraise"value="RAISE COMPLAINT">
                                                </div>
                                            </form>
                                     </div>
                                     <div role="tabpanel"style="text-align:left;width:100%; margin-left:20px;" class="tab-pane " id="validity"> 
                                        <form class="form" method="POST" action="comp_home.php" style=" width:80%;">
                                            <table class="table table-hover"border="0">
                                                <thead class="row">
                                                <tr class="row">
                                                <TH class="col" style="text-align:center;">SELECT</TH>
                                                <TH class="col" align="center">NAME</TH>
                                                <TH class="col" align="center">DESCRIPTION</TH>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $val=('validity');
                                                    $cres=mysqli_query($link,"SELECT com_id,name,description,department FROM net_com where department='$val'");
                                                    while($row=mysqli_fetch_assoc($cres))

                                                    {
                                                        $com_id=$row['com_id'];

                                                        echo"<tr class='row'>";
                                                        echo"<td class='col' align='center'>"; echo "<input type='checkbox'name='rcomid'value='$com_id'>"; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['name']; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['description']; echo"</td>";
                                                        echo"</tr>";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <div class="row" style="text-align:center;">
                                                <input type="submit" class="btn btn-large btn-success"
                                                style="margin-bottom:20px;float:center;" name="vcraise"value="RAISE COMPLAINT">
                                                </div>
                                            </form>
                                     </div>
                                     <div role="tabpanel"style="text-align:left;width:100%; margin-left:20px;" class="tab-pane " id="valad"> 
                                        <form class="form" method="POST" action="comp_home.php" style=" width:80%;">
                                            <table class="table table-hover"border="0">
                                                <thead class="row">
                                                <tr class="row">
                                                <TH class="col" style="text-align:center;">SELECT</TH>
                                                <TH class="col" align="center">NAME</TH>
                                                <TH class="col" align="center">DESCRIPTION</TH>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $vala=('valueadded');
                                                    $cres=mysqli_query($link,"SELECT com_id,name,description,department FROM net_com where department='$vala'");
                                                    while($row=mysqli_fetch_assoc($cres))

                                                    {
                                                        $com_id=$row['com_id'];

                                                        echo"<tr class='row'>";
                                                        echo"<td class='col' align='center'>"; echo "<input type='checkbox'name='rcomid'value='$com_id'>"; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['name']; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['description']; echo"</td>";
                                                        echo"</tr>";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <div class="row" style="text-align:center;">
                                                <input type="submit" class="btn btn-large btn-success"
                                                style="margin-bottom:20px;float:center;" name="vacraise"value="RAISE COMPLAINT">
                                                </div>
                                            </form>
                                     </div>
                                     <div role="tabpanel"style="text-align:left;width:100%; margin-left:20px;" class="tab-pane " id="others"> 
                                        <form method="POST" action="">
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

                                                    <td  class="col">
                                                    <input type="submit"name="oregcom" class="btn btn-success btn-large" value="SUBMIT"/></td>
                                                    <td  class="col">
                                                    <input type="reset" class="btn btn-success btn-large" value="RESET"></td>
                                                </tr>
                                            </table>
                                        </form>
                                     </div>
                                </div>
                            </div>
                        </div>
                    </div>

</body>
</html>

<?php
if (isset($_POST['ncraise']))
{
$rcom_id=$_POST['rcomid'];

$z=('UC');
$y=('44');
	
	
	$comex=mysqli_query($link,"SELECT ucom_id FROM raised_com ");
	$come=mysqli_num_rows($comex);
	$invID = str_pad($come,3,'0',STR_PAD_LEFT);
	$ucom_id=$z.$y.$invID;
    mysqli_query($link,"insert into raised_com values('$ucom_id','$rcom_id','$a','$net')") or die(mysqli_error($link));
	echo '<script>alert("SUCCESSFULLY REGISTERED")</script>';	
}
elseif (isset($_POST['vcraise']))
{
$rcom_id=$_POST['rcomid'];

$z=('UC');
$y=('44');
	
	
	$comex=mysqli_query($link,"SELECT ucom_id FROM raised_com ");
	$come=mysqli_num_rows($comex);
	$invID = str_pad($come,3,'0',STR_PAD_LEFT);
	$ucom_id=$z.$y.$invID;
    mysqli_query($link,"insert into raised_com values('$ucom_id','$rcom_id','$a','$ded')") or die(mysqli_error($link));
	echo '<script>alert("SUCCESSFULLY REGISTERED")</script>';	
}
elseif (isset($_POST['dcraise']))
{
$rcom_id=$_POST['rcomid'];

$z=('UC');
$y=('44');
	
	
	$comex=mysqli_query($link,"SELECT ucom_id FROM raised_com ");
	$come=mysqli_num_rows($comex);
	$invID = str_pad($come,3,'0',STR_PAD_LEFT);
	$ucom_id=$z.$y.$invID;
    mysqli_query($link,"insert into raised_com values('$ucom_id','$rcom_id','$a','$val')") or die(mysqli_error($link));
	echo '<script>alert("SUCCESSFULLY REGISTERED")</script>';	
}
elseif (isset($_POST['vacraise']))
{
$rcom_id=$_POST['rcomid'];

$z=('UC');
$y=('44');
	
	
	$comex=mysqli_query($link,"SELECT ucom_id FROM raised_com ");
	$come=mysqli_num_rows($comex);
	$invID = str_pad($come,3,'0',STR_PAD_LEFT);
	$ucom_id=$z.$y.$invID;
    mysqli_query($link,"insert into raised_com values('$ucom_id','$rcom_id','$a','$vala')") or die(mysqli_error($link));
	echo '<script>alert("SUCCESSFULLY REGISTERED")</script>';	
}
elseif(isset($_POST['oregcom']))
{
    $name=$_POST['comname'];
    $desc=$_POST['desc'];

    $z=('UC');
    $y=('44');
	
	
	$comex=mysqli_query($link,"SELECT ucom_id FROM raised_com ");
	$come=mysqli_num_rows($comex);
	$invID = str_pad($come,3,'0',STR_PAD_LEFT);
	$ucom_id=$z.$y.$invID;
    mysqli_query($link,"insert into raised_com values('$ucom_id','$name','$a','$desc')") or die(mysqli_error($link));
	echo '<script>alert("SUCCESSFULLY REGISTERED")</script>';	
}

?>

