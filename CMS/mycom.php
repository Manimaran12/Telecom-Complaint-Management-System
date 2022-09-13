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
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
                <form class="form" method="POST" action="" style=" margin-left:100px;width:80%;background-color:rgba(238, 233, 240, 0.5);">
                                            <table class="table table-hover"border="0">
                                                <thead class="row">
                                                <tr class="row">
                                                <TH class="col" style="text-align:center;">COMPLAINT ID</TH>
                                                <TH class="col" align="center">NAME OF COMPLAINT</TH>
                                                <TH class="col" align="center">DESCRIPTION</TH>
                                                <TH class="col" align="center">DEPARTMENT</TH>
                                                <TH class="col" align="center">STATUS OF COMPLAINT</TH>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                    $cres=mysqli_query($link,"SELECT ucom_id,com_id,user_id,department FROM raised_com where user_id='$a'");
                                                    while($row=mysqli_fetch_assoc($cres))
                                                    
                                                    {
                                                        $com_id=$row['com_id'];
                                                        $comuser=$row['ucom_id'];
                                                        $user=$row['user_id'];
                                                        $chenet=mysqli_query($link,"SELECT complaint_id,user_id FROM network where (user_id='$a' && complaint_id='$com_id') ");
                                                        $checknet=mysqli_fetch_assoc($chenet);
                                                        $cheval=mysqli_query($link,"SELECT complaint_id,user_id FROM validity where (user_id='$a' && complaint_id='$com_id') ");
                                                        $checkval=mysqli_fetch_assoc($cheval);
                                                        $cheva=mysqli_query($link,"SELECT complaint_id,user_id FROM value_added where (user_id='$a' && complaint_id='$com_id') ");
                                                        $checkva=mysqli_fetch_assoc($cheva);
                                                        if($checknet > 0)
                                                        {
                                                            $status=('proggeress');
                                                        }
                                                        elseif($checkval > 0)
                                                        {
                                                            $status=('proggeress');
                                                        }
                                                        elseif($checkva > 0)
                                                        {
                                                            $status=('progress');
                                                        }
                                                        
                                                        else{
                                                            $status='solved';
                                                        }
                                                        $comres=mysqli_query($link,"SELECT com_id,name,description,department FROM net_com where com_id='$com_id'");
                                                    while($row1=mysqli_fetch_assoc($comres))


                                                    {
                                                    

                                                        echo"<tr class='row'>";
                                                        echo"<td class='col' align='center'>"; echo $row['com_id']; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row1['name']; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row1['description']; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row1['department']; echo"</td>";
                                                        echo"<td class='col' align='center'>"; echo $status; echo"</td>";
                                                        
                                                        echo"</tr>";
                                                    }
                                                }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <div class="row" style="text-align:center;">
                                                <a href="comp_home.php" class="btn btn-large btn-success" 
                                                style="margin-bottom:20px;float:center;" name="ncraise">RAISE COMPLAINT</a>
                                                </div>
                                            </form>
</body>
</html>