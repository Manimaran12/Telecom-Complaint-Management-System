<nav class="navbar navbar-fixed-top"style="margin-top:20px"role="navigation">
                <div class="container-fluid">
<div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="glyphicon  glyphicon-align-justify icon-black"></span>
                        </button>
                        <label id="label1"><marquee>
                            <?php 
                            $annres=mysqli_query($link,"SELECT announce_id,type,content FROM announce");
                            while($row=mysqli_fetch_assoc($annres))

                            {
                                $anntype=$row['type'];
                                $anncontent=$row['content'];
                            
                            echo"<a href='<?php echo $anncontent ?>' >";  echo "$anntype</a>";
                            echo"&nbsp;&nbsp;&nbsp;&nbsp;";
                         }
                        ?>
                        </marquee></label>
                        
                    </div>
                    <div class="navbar-collapse collapse ">
                        <ul class=" navbar-nav navbar-right">
                            
                        <li id="link2">
                                <label id="label3" class="btn  navbar-btn"><?php echo $a;?></label>
                            </li>
                            <li id="link1">
                                <a class="btn  navbar-btn" id="label2" href="index.php">HOME</a>
                            </li>
                                        
                            <li id="link1">
                                <a class="btn  navbar-btn" id="label2" href="comp_home.php">COMPLAINTS</a>
                            </li>
                            <li id="link1">
                                <a class="btn  navbar-btn" id="label2" href="mycom.php">MYQURIES</a>
                            </li>
                            <li id="link1">
                            
                                <a class="btn  navbar-btn" id="label2" href="about.php">ABOUT US</a>  
                            </li>
                            <li id="link1">
                                <a class="btn  navbar-btn" id="label2" href="logout.php">LOGOUT</a>  
                            </li>
                            <li id="link1">
                                <a class="btn  navbar-btn" id="label2" href="FAQ.php">FAQ</a>  
                            </li>
                        </ul>
                    </div>
                    </div>
            </nav>