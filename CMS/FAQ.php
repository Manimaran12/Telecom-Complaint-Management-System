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
    <style>
        h3 {
            font-size:50px;
            color:red;
        
        
        
        }
        d {
            font-family: verdana;
            font: size:30px;
            color:white;
        }

    </style>   
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
                  <a href="comp_home.php"><img id="img1" src="/CMS/img/comlaint1.PNG" alt=""height='400' width='350' class="logo">
                    </img></a><P align="center"style="color:red;">CLICK HERE TO RAISE COMPLAINT</P>
              </div>
            </div>
          </form>
          <p>
            <h3> What is Open Network?</h3>
             <d>Open Network is a bold new initiative by us to build a better network. In this Initiative lies a conviction that we want to be and can be better than what we are today. It also means making our customers our partners such that they stand shoulder to shoulder with us to achieve this ambition. We are opening up our network information for you to tell us where the gaps are, so that we can improve our coverage and give you an experience like no other.</d>
            <h3> What is Project Leap?</h3>
             <d>Project leap is our biggest network transformation program aimed at delivering a world class network. This strategic program will see an investment of Rs. 60,000 crores in the next 3 years on the back of Rs. 1,60,000 crores that we have already invested. We are confident that this program will help airtel build a dynamic network that will significantly improve the quality of our voice and data services across the length and breadth of the country.</d>
          </p>

        <script src="js/bootstrap.min.js">
        <script src="js/jquery.min.js">
  </body>
</html>