<?php
$link=mysqli_connect("localhost","root","")or die();
mysqli_select_db($link,"cms")or die(mysqli_error($link));
?> 