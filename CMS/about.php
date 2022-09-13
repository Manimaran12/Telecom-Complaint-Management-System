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
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
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
        <?php include'anav.php';?>
                </div>
                
                 <form method="POST">
                    <div class="container-fluid ">
                        <div class="col">
                        <div role="tabpanel">
                                <ul class="nav nav-tabs well "style="height: -10px;" role="tablist">
                                   
                                    <li id="tabli" role="presentation"><a id="tablink" href data-target="#about" aria-controls="about"role="tab" data-toggle="tab"><b>ABOUT US</b></a></li>
                                    
                                </ul>
                            
                            <div class="tab-content col-md-10 col-sd-10 col-ld-10" style="overflow:hidden;margin-left:100px;margin-top:25px;">
                                
                                <div   role="tabpanel" class="tab-pane" id="cont"> 
                                    <h1>
                                    CONTACT : 875479915 <br>
                                    Mail ID : tele@gmail.com
                                    </h1>
                                    <section class="location" content="width=device-width,initial-scale=1.0">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.964088109233!2d77.61682791461267!3d13.037957890812391!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae173bf5f0f88f%3A0x8765247ff5e4e171!2sHKBK%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1643617087190!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </section>
                                </div>
                        </div>   
                       
                    </div>
                </FORM>
           
            
           

        </body>
    </html>


