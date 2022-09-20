<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\style.css">
    <link rel="stylesheet" href="..\bootstrap.css">
        <title>Hotel</title>
        <style>
        .header{
            background-image: url('../../images/room2.jpeg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center ;
            background-size:cover;
        }
        h5{
            color:maroon;
        }
        .col-md-12{
            background-color:grey;
        }
        .col-md-12 h3{
            margin-top:20px;
            color:black;
            font-size: 25 px;
            font-weight: bolder;
            text-shadow: 2px 2px grey;
        }
        .col-md-12 h5{
            margin-top:20px;
            color:darkblue;
            font-size: 20 px;
            font-weight: bold;
        }
        .card-header{
            color:BLACK;
            font-weight:bold;
        }
        .row .card-text{
            color:BLACK;
            font-weight:bold;
        }
        .row .card-text b{
            color:blue;
        }
        .row .card {
            margin-left:20px;
            border: solid black 1px;
            width:33.33%;
            padding:10px;
            height: auto;
        }
        
        .row .card:hover {
        box-shadow:0px 3px 65px 0px grey;
        }
        </style>
    </head>
    <body>
        <!--================Header Area =================-->
        <header class="header" id="header"> 
            <div class="head-top">
                <div class="site-name">
                    <span>OTELSHIA</span>
                </div>
                <div class="site-nav">
                        <a href="admin_dashboard.html">HOME</a>
                        <a href="admin_dashboard.php">ADMIN</a>
                        <a href="rooms.php">BOOKING</a>
                        <a href="payment.php">PAYMENT</a>
                    </div>
                </div>
    
        <!--================Header Area Finish=================-->
        <br><br>
        
        <!--================Banner Area END =================-->
       <div class="row">
       	<div class="col-md-12">
       		<center><h3>ROOM BOOKING</h3></center>
       	</div>
       </div><br>
       <center><h5>ROOM TYPE: SINGLE AC ROOMS</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel management");
                $query = "select * from singleroom";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["roomno"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['roomno'] . "&rt=a";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['roomno'] . "&rt=a";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br>
        <center><h5>ROOM TYPE:SINGLE NON AC ROOMS</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel management");
                $query = "select * from singlenonacroom";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["roomno"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['roomno'] . "&rt=b";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['roomno']. "&rt=b";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div><br>
        <center><h5>ROOM TYPE: DOUBLE AC ROOMS</h5></center><br>
        <div class="row">
            <?php
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"hotel management");
                $query = "select * from doubleroom";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                        <div class="col-md-2" style="margin-left: 50px;">
                        <div class="card bg-light" style="width: 300px">
                        <div class="card-header">Room No: <?php echo $row["roomno"]?></div>
                        <div class="card-body">
                            <p class="card-text">Room Status: <?php if($row["status"]==0){echo "<b>Available</b>";}else{echo "<b>Already Booked</b>";}?></p>
                            <a href="book_room.php?rn=<?php echo $row['roomno'] . "&rt=c";?>" class="btn btn-primary <?php if($row["status"]==0){echo "active";}else{echo "disabled";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "false";}else{echo "true";}?>">Book</a>
                            <a href="unbook.php?rn=<?php echo $row['roomno']. "&rt=c";?>" class="btn btn-danger <?php if($row["status"]==0){echo "disabled";}else{echo "active";}?>" role="button" aria-disabled="<?php if($row['status']==0){echo "true";}else{echo "false";}?>">Unbook</a>
                        </div>
                    </div>
                    </div>  
                    <?php 
                }
            ?>
        </div>
        <header>
        <br><br>
        <!--================ start footer Area  =================-->	
        <footer class="footer">
            <div class="footer-container">
                <div>
                    <h2>About Us</h2>
                   <p> Land of volcanic peaks, scenic waterfalls, hot springs and rich flora and fauna. National parks, wildlife refuges, quaint villages, historic sites and a countless sum of golden beaches in the area provide a variety of activities for guests that seek an authentic Costa Rican experience.</p>
                    <ul class="social-icons">
                        <li class="flex"><i class="fa fa-twitter fa-2x"></i></li>
                        <li class="flex"><i class="fa fa-facebook fa-2x"></i></li>
                        <li class="flex"><i class="fa fa-instagram fa-2x"></i></li>
                    </ul>
                </div>
                <div>
                    <h2>Useful Links</h2>
                    <a href="#">Blog</a>
                    <a href="#">Rooms</a>
                    <a href="#">Subcriptions</a>
                    <a href="#">Gift Card</a>
                </div>
                <div>
                    <h2>Privacy</h2>
                    <a href="#">Career</a>
                    <a href="#">About Us</a>
                    <a href="#">Contact Us</a>
                    <a href="#">Services</a>
                </div>
                <div>
                    <h2>Have A Question?</h2>
                    <div class="contact-item">
                        <span>
                            <i class="fas fa-map-marker-alt"></i>
                        </span>
                        <span>
                            203 Fake St.Mountain View, San Francisco, California, USA
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-phone-alt"></i>
                        </span>
                        <span>
                            +84545 37534 48
                        </span>
                    </div>
                    <div class = "contact-item">
                        <span>
                            <i class = "fas fa-envelope"></i>
                        </span>
                        <span>
                            info@domain.com
                        </span>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end of footer  -->

        <script srs="java1.js"></script>
</body>     
</html>  