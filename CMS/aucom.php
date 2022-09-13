                                    <form class="form" method="POST" action="" style=" width:80%;">
                                            <table class="table table-hover"border="0">
                                                <thead class="row">
                                                <tr class="row">
                                                <TH class="col" style="text-align:center;">RAISED COMPLAINTS</TH>
                                                <TH class="col" align="center">COMPLAINT</TH>
                                                <TH class="col" align="center">USER ID</TH>
                                                <TH class="col" align="center">DEPARTMENT</TH>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?php
                                                $cres=mysqli_query($link,"SELECT ucom_id,com_id,user_id,department FROM raised_com order by ucom_id ");
                                                    while($row=mysqli_fetch_assoc($cres))

                                                    {
                                                        $ucom_id = $row['ucom_id'];
                                                        $com_id=$row['com_id'];
                                                        $user_id=$row['user_id'];
                                                        $dep=$row['department'];
                                                        echo"<tr class='row'>";
                                                        echo"<td class='col' align='center'>"; echo "<input type='checkbox'name='ucomid'value='$ucom_id'>"; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['com_id']; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['user_id']; echo"</td>";
                                                        echo"<td class='col' align='left'>"; echo $row['department']; echo"</td>";
                                                        echo"</tr>";
                                                    }
                                                    ?>
                                                    </tbody>
                                                </table>
                                                <div class="row" style="text-align:center;">
                                                <input type="submit" class="btn btn-large btn-success" style="margin-bottom:20px;float:center;" 
                                                    name="approve"value="APPROVE COMPLAINTS">
                                                </div>
                                            </form>
                                            <?php
if (isset($_POST['approve']))
{
$rcom_id=$_POST['ucomid'];
if($dep=='network'){
$z=('NET');
$y=('66');

	$comex=mysqli_query($link,"SELECT net_id FROM network ");
	$come=mysqli_num_rows($comex);
	$invID = str_pad($come,3,'0',STR_PAD_LEFT);
	$reg_id=$z.$y.$invID;
    mysqli_query($link,"insert into network values('$reg_id','$rcom_id','$com_id','$user_id')") or die(mysqli_error($link));
	echo '<script>alert("NETWORK ISSUE APPROVED")</script>';	
}
elseif($dep=='validity'){
    $z=('VAL');
    $y=('66');
    
        $comex=mysqli_query($link,"SELECT val_id FROM validity ");
        $come=mysqli_num_rows($comex);
        $invID = str_pad($come,3,'0',STR_PAD_LEFT);
        $reg_id=$z.$y.$invID;
        mysqli_query($link,"insert into validity values('$reg_id','$rcom_id','$com_id','$user_id')") or die(mysqli_error($link));
        echo '<script>alert("VALIDITY ISSUE APPROVED")</script>';	
    }
    elseif($dep=='va'){
        $z=('VA');
        $y=('66');
        
            $comex=mysqli_query($link,"SELECT va_id FROM value_added ");
            $come=mysqli_num_rows($comex);
            $invID = str_pad($come,3,'0',STR_PAD_LEFT);
            $reg_id=$z.$y.$invID;
            mysqli_query($link,"insert into value_added values('$reg_id','$rcom_id','$com_id','$user_id')") or die(mysqli_error($link));
            echo '<script>alert("VALUE ADDED SERVICE ISSUE APPROVED")</script>';	
        }
}

                                        