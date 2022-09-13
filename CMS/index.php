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
<!DOCTYPE HTML>
  <html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        
    </head>
    <title>
        welcome to online complaint management sytem
    </title>
    <body>
    <div class="container-fluid " style="margin-top:70px;">
        <?php include'header.php';?></div>
        <style>
            <?php include'main.css';?>
        </style>
        <div class="container-fluid navbar-fixed-top" style="margin-top:20px">
        <?php include'nav.php';?>
                </div>
        <form>
            <div class="row1">
              
              
              <div class="columnan1">
                  <a href="comp_home.php"><img id="img1" src="/CMS/img/comlaint1.PNG" alt=""height='200' width='170' class="logo">
                    </img></a><P align="center">RAISE COMPLAINT</P>
              </div>
            </div>
          </form>
         

        <script src="js/bootstrap.min.js">
        <script src="js/jquery.min.js">
  </body>
</html>
